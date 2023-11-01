<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
       <h1>Employee Report</h1>
    <p>Facility: {{ $facility }}</p>
    <table >
    <thead>
        <tr>
            <th>Name</th>
            <th>Date of Birth</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee->name }} {{ $employee->last_name }}</td>
                <td>{{ $employee->date_birth }}</td>
                
            </tr>
        @endforeach
    </tbody>
    </table> 
    </div>    
    
 
</body>
</html>



   
