<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contact List</h1>
    <a href="/contacts/create">New Contact</a>

    <table border="1">
        <tr>
            <th>id</th>

            <th>FirstName</th>
            <th>LastName</th>
            <th>PhoneNumber</th>
        </tr>
        @foreach ($contacts as $contact)
    
            <tr>
                <td>{{$contact->id}}</td>

                <td>{{$contact->FirstName}}</td>
                <td>{{$contact->LastName}}</td>
                <td>{{$contact->PhoneNumber}}</td>
                <td>
                    
                    <a href="{{route('contacts.edit', ['contact'=>$contact] )}}">
                        Edit
                    </a>
                    
                     
                </td>
                <td> 
                    <a href="/contacts"></a>
                      <form
                    action="{{route('contacts.destroy', ['contact'=>$contact])}}" method="post">
                       @csrf
                       @method('delete')
                       <button type="submit" >Delete</button>

                   </form>
                </td>
            
                    
                    
                  
            </tr>
        @endforeach
    </table>
</body>
</html>