<x-bootstrap-theme>
<h1>Staff #{{ $staffs->id }}</h1>
<table class="table table-sm" style="width:50%">
    <tbody>
        <tr><th> id </th><td>{{ $staffs->id }}</td></tr>
        <tr><th> Name  </th><td> {{ $staffs->Name }} </td></tr>
        <tr><th> Age   </th><td> {{ $staffs->Age }} </td></tr>
        <tr><th> Salary   </th><td> {{ $staffs->Salary }} </td></tr>
        <tr><th> Phone   </th><td> {{ $staffs->Phone }} </td></tr>
    </tbody>
</table>
</x-bootstrap-theme>