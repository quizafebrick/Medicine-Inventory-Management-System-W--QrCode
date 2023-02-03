<?php

namespace App\Http\Livewire;

use App\Models\Medicine;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class MedicineTable extends PowerGridComponent
{
    use ActionButton;

    /*
    |--------------------------------------------------------------------------
    |  Features Setup
    |--------------------------------------------------------------------------
    | Setup Table's general features
    |
    */
    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            Exportable::make('Data_Backup')
                ->striped()
                ->type(Exportable::TYPE_XLS),
            Header::make()->showSearchInput(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    /*
    |--------------------------------------------------------------------------
    |  Datasource
    |--------------------------------------------------------------------------
    | Provides data to your Table using a Model or Collection
    |
    */

    /**
     * PowerGrid datasource.
     *
     * @return Builder<\App\Models\Medicine>
     */
    public function datasource(): Builder
    {
        return Medicine::query();
    }

    /*
    |--------------------------------------------------------------------------
    |  Relationship Search
    |--------------------------------------------------------------------------
    | Configure here relationships to be used by the Search and Table Filters.
    |
    */

    /**
     * Relationship search.
     *
     * @return array<string, array<int, string>>
     */
    public function relationSearch(): array
    {
        return [];
    }

    /*
    |--------------------------------------------------------------------------
    |  Add Column
    |--------------------------------------------------------------------------
    | Make Datasource fields available to be used as columns.
    | You can pass a closure to transform/modify the data.
    |
    | ❗ IMPORTANT: When using closures, you must escape any value coming from
    |    the database using the `e()` Laravel Helper function.
    |
    */
    public function addColumns(): PowerGridEloquent
    {
        return PowerGrid::eloquent()
            ->addColumn('name')
            ->addColumn('category_name')
            ->addColumn('quantity')
            ->addColumn('expiration')
            ->addColumn('ingredient')
            ->addColumn('strength')
            ->addColumn('image')
            ->addColumn('created_at_formatted', fn (Medicine $model) => Carbon::parse($model->created_at)->format('d/m/Y H:i:s'))
            ->addColumn('updated_at_formatted', fn (Medicine $model) => Carbon::parse($model->updated_at)->format('d/m/Y H:i:s'));
    }

    /*
    |--------------------------------------------------------------------------
    |  Include Columns
    |--------------------------------------------------------------------------
    | Include the columns added columns, making them visible on the Table.
    | Each column can be configured with properties, filters, actions...
    |
    */

    /**
     * PowerGrid Columns.
     *
     * @return array<int, Column>
     */
    public function columns(): array
    {
        return [
            Column::make('Medicine Name', 'name')
                ->sortable()
                ->headerAttribute('text-center, text-lg')
                ->bodyAttribute('text-center, text-lg, font-bold')
                ->searchable(),
            Column::make('Quantity', 'quantity')
                ->sortable()
                ->headerAttribute('text-center, text-lg')
                ->bodyAttribute('text-center, text-lg, font-bold')
                ->searchable(),
            Column::make('Expiration Date', 'expiration')
                ->sortable()
                ->headerAttribute('text-center, text-lg')
                ->bodyAttribute('text-center, text-lg, font-bold')
                ->searchable(),
        ];
    }

    /*
    |--------------------------------------------------------------------------
    | Actions Method
    |--------------------------------------------------------------------------
    | Enable the method below only if the Routes below are defined in your app.
    |
    */

    /**
     * PowerGrid Medicine Action Buttons.
     *
     * @return array<int, Button>
     */

    public function actions(): array
    {
       return [
            Button::make('show', 'Show')
                ->class('bg-blue-500 cursor-pointer px-3 py-2.5 m-1 rounded text-sm text-black font-bold hover:bg-blue-600 hover:duration-200 ease-in')
                ->openModal('medicine-show', ['id' => 'id']),

            Button::make('edit', 'Edit')
                ->class('bg-yellow-500 cursor-pointer px-3 py-2.5 m-1 rounded text-sm text-black font-bold hover:bg-yellow-600 hover:duration-200 ease-in')
                ->openModal('edit-medicine', ['id' => 'id']),

            Button::make('destroy', 'Delete')
               ->class('bg-red-600 cursor-pointer text-black px-3 py-2 m-1 rounded text-sm font-bold hover:bg-red-500 hover:duration-200 ease-in')
            //    ->openModal('medicine-meshowdicine', ['id' => 'id']),
        ];
    }

    /*
    |--------------------------------------------------------------------------
    | Actions Rules
    |--------------------------------------------------------------------------
    | Enable the method below to configure Rules for your Table and Action Buttons.
    |
    */

    /**
     * PowerGrid Medicine Action Rules.
     *
     * @return array<int, RuleActions>
     */


    public function actionRules(): array
    {
        return [
            Rule::rows()
                ->when(function ($medicine) {
                    return $medicine->quantity == 0;
                })
                ->setAttribute('class', 'bg-red-400'),
        ];
    }
}
