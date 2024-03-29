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
            <td>{{$group->count_}}</td>
        </tr>

        <tr>
            <th>Students</th>
            <th>Check in</th>
            <th>Check out</th>
            <th>Day</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <p style="display: none">{{$u = \App\Models\checkinout::where('user_id',$user->id)->get()}}</p>
            @foreach($u as $user1)
            <tr>
                <td>{{$user->name}}</td>

                <td>{{$user1->checkin}}</td>
                <td>{{$user1->CheckOut}}</td>
                <td>{{$user1->Currentday}}</td>

            </tr>

            @endforeach
        </tr>
        @endforeach
    </tbody>
</table>
