@include('navbar')

<table class="table container">
    <thead>
    <tr>
        <th scope="col">Name of Group</th>
        <th scope="col">STU-Count</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$group->name}}</td>
            <td>{{$group->count}}</td>
        </tr>

        <tr>
            <th>Students</th>
            <th>Check in</th>
            <th>Check out</th>
            <th>Day</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <p style="display: none">{{$u = \App\Models\checkinout::where('user_id',$user->id)->get()->first()}}</p>
            <td>{{$u->checkin}}</td>
            <td>{{$u->CheckOut}}</td>
            <td>{{$u->Currentday}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
