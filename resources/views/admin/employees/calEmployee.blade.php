<table class="table table-bordered">
    <tr>
        <th>Employee</th>
        <th class="text-center">Count</th>
    </tr>
    <tr>
        <td>Publish Employee</td>
        <td class="text-center">{{ $pubEmployee }}</td>
    </tr>
    <tr>
        <td>Unpublish Employee</td>
        <td class="text-center">{{ $unpubEmployee }}</td>
    </tr>
    <tr>
        <td>Total Employee</td>
        <td class="text-center">{{ $totalEmployees }}</td>
    </tr>
</table>

<span class="float-right text-primary">Last Update: {{ Carbon\Carbon::now() }}</span> <br>
<span class="float-right text-warning">*Info update from database using ajax</span>
