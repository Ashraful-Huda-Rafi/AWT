

    <h2>Dashboard</h2>

    <table border="1">

        <tr>

            <th>Name</th>
            <th>Email</th>
            <th>dob</th>
            <th>Password</th>
        
        </tr>

        <tr>
            <td>{{@$user->name}}</td>
            <td>{{@$user->email}}</td>
            <td>{{@$user->dob}}</td>
            <td>{{@$user->password}}</td>

            <td><a  class="btn btn-primary" href="/edit/{{$user->id}}">Edit</a></td>

        </tr>

       

    </table>


