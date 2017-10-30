@foreach($companys as $company)
    <option value="{{ $company->id_client }}">{{ $company->name_client }}</option>
@endforeach