<table class="table table-bordered">
    <tr>
        <th>Doctor</th>
        <th class="text-center">Count</th>
    </tr>
    <tr>
        <td>Publish Doctor</td>
        <td class="text-center">{{ $pubDoctor }}</td>
    </tr>
    <tr>
        <td>Unpublish Doctor</td>
        <td class="text-center">{{ $unpubDoctor }}</td>
    </tr>
    <tr>
        <td>Total Doctor</td>
        <td class="text-center">{{ $totalDoctors }}</td>
    </tr>
</table>

<span class="float-right text-primary">Last Update: {{ Carbon\Carbon::now() }}</span> <br>
<span class="float-right text-warning">*Info update from database using ajax</span>
