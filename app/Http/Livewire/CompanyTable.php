<?php

namespace App\Http\Livewire;

use App\Models\ca\Company;
use Illuminate\Support\Carbon;
use App\Models\ca\CompanyDetail;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Detail;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\{ActionButton, WithExport};
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridColumns};

final class CompanyTable extends PowerGridComponent
{
    use ActionButton;
    use WithExport;
    public bool $multiSort = true;
    /*
    |--------------------------------------------------------------------------
    |  Features Setup
    |--------------------------------------------------------------------------
    | Setup Table's general features
    |
    */
    public function setUp(): array
    {
        // $this->showCheckBox();

        return [
            Exportable::make('export')
                ->striped()
                ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),

            Header::make()->showSearchInput(),

            Footer::make()
                ->showPerPage()
                ->showRecordCount('min'),
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
     * @return Builder<\App\Models\ca\Company>
     */
    public function datasource(): Builder
    {
        // dd(Company::query()->with('company_details'));
        return Company::query();
        // ->join('company_details', 'companies.id', 'company_details.company_id')
        // ->select('companies.name', 'companies.type', 'companies.primary_email', 'companies.primary_phone',
        //             'company_details.pan', 'company_details.aadhar');
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
        return [
            // 'companies' => [
            //     'name',
            // ],
            // 'company_details' => [
            //     'pan', 'aadhar'
            // ],
        ];
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
    public function addColumns(): PowerGridColumns
    {
        return PowerGrid::columns()
            ->addColumn('index')
            ->addColumn('type')
            ->addColumn('name')
            ->addColumn('primary_email')
            ->addColumn('primary_phone');
        /*** Company Details ***/
        // ->addColumn('pan')
        // ->addColumn('aadhar');
        // ->addColumn('created_at_formatted', fn (Company $model) => Carbon::parse($model->created_at)->format('d/m/Y H:i:s'));
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
            Column::make('index', 'index'),
            Column::make('Type', 'type')->searchable()->sortable(),
            Column::make('Name', 'name')->searchable()->sortable(),
            Column::make('Email-ID', 'primary_email')->searchable()->sortable(),
            Column::make('Phone No', 'primary_phone')->searchable()->sortable(),
            // Column::make('PAN No.', 'pan')->searchable()->sortable(),
            // Column::make('AADHAR', 'aadhar')->searchable()->sortable(),
            // Column::make('Created at', 'created_at_formatted', 'created_at')->sortable(),
        ];
    }

    /**
     * PowerGrid Filters.
     *
     * @return array<int, Filter>
     */
    public function filters(): array
    {
        return [
            // Filter::datetimepicker('created_at'),
            Filter::select('type', 'type')
                ->dataSource(Company::distinct()->get('type'))
                ->optionValue('type')
                ->optionLabel('type'),

            Filter::inputText('name', 'name')
                ->operators(['contains', 'is', 'is_not']),

            Filter::inputText('primary_email', 'primary_email')
                ->operators(['contains', 'is', 'is_not']),

            Filter::inputText('primary_phone', 'primary_phone')
                ->operators(['contains', 'is', 'is_not']),

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
     * PowerGrid Company Action Buttons.
     *
     * @return array<int, Button>
     */


    public function actions(): array
    {
        return [
            Button::make('viewIndCmp', 'View')
                ->target('')
                ->class('bg-indigo-500 cursor-pointer text-white px-3 py-2.5 m-1 rounded text-sm')
                ->route('company.viewIndCmp', ['company_id' => 'id']),

            //    Button::make('destroy', 'Delete')
            //        ->class('bg-red-500 cursor-pointer text-white px-3 py-2 m-1 rounded text-sm')
            //        ->route('company.destroy', function(\App\Models\ca\Company $model) {
            //             return $model->id;
            //        })
            //        ->method('delete')
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
     * PowerGrid Company Action Rules.
     *
     * @return array<int, RuleActions>
     */

    /*
    public function actionRules(): array
    {
       return [

           //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($company) => $company->id === 1)
                ->hide(),
        ];
    }
    */
}
