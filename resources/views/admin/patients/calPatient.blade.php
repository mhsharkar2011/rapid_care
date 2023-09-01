<table class="table table-bordered">
    <tr>
        <th>Patient</th>
        <th class="text-center">Count</th>
    </tr>
    <tr>
        <td>Active Patients</td>
        <td class="text-center">{{ $activePatients }}</td>
    </tr>
    <tr>
        <td>Inactive Patients</td>
        <td class="text-center">{{ $inactivePatients }}</td>
    </tr>
    <tr>
        <td>Total Patient</td>
        <td class="text-center">{{ $totalPatients }}</td>
    </tr>
</table>

<span class="float-right text-primary">Last Update: {{ Carbon\Carbon::now() }}</span> <br>
<span class="float-right text-warning">*Info update from database using ajax</span>
