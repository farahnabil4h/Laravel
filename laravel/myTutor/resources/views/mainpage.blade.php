<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        body {
                font-family: 'Poppins', sans-serif;
        }
        @media screen and (max-width: 768px) {
            .w3-container {
                width: 100%;
            }
        }
        @media screen and (min-width: 768px) {
            .w3-container {
                width: 700px;
                margin: 0 auto;
            }
        }
        table {
            border: 1px solid black;
            border-collapse: collapse;
            width: 100%;
        }
        th{
            background-color: #F9E79F;
        }
        th, td {
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even) {
            background-color: #F9E79F;
        }
    </style>
</head>
<body class="antialiased">
    @if (session('save'))
    <script>
        alert("Success");
    </script>
    @endif
    @if (session('error'))
    <script>
        alert("Failed");
    </script>
    @endif
    <header class="w3-center w3-padding-large w3-green">
        <h2>List of Subjects</h2>
    </header>
    <div>
        <button class="w3-button w3-round w3-right w3-green w3-margin" 
        onclick="document.getElementById('newitem').style.display='block';return false;">New Subject</button>
    </div>
    <div class="w3-padding">
        <table>
            <thead>
                <th>No</th>
                <th>Subject Title</th>
                <th>Subject Description</th>
                <th>Price</th>
                <th>Total hours</th>
            </thead>
            @foreach ($listSubjects as $listItem)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $listItem->subject_title}}</td>
                <td>{{ $listItem->subject_desc}}</td>
                <td>{{ $listItem->subject_price}}</td>
                <td>{{ $listItem->subject_totalhours}}</td>
            @endforeach
        </table>
    </div>
    <footer class="w3-footer w3-center w3-green w3-bottom">
        <p>Copyright &copy; 2022 MY Tutor</p>
    </footer>
        
    <div id="newitem" class="w3-modal w3-animate-opacity">
        <div class="w3-modal-content w3-round" style="width:500px">
            <header class="w3-row w3-green"> <span onclick="document.getElementById('newitem').style.display='none'" 
            class="w3-button w3-display-topright w3-small">&times;</span>
                <h4 class="w3-center">New Subject Details</h4>
            </header>
            <div class="w3-padding">
                <form method="post" action="{{ route('savesubject') }}">
                    {{csrf_field()}}
                    <p><input class="w3-input w3-round w3-border" type="text" name="subject_title" placeholder="Title"></p>
                    <p><input class="w3-input w3-round w3-border" type="text" name="subject_desc" placeholder="Description"></p>
                    <p><input class="w3-input w3-round w3-border" type="number" name="subject_price" placeholder="Price" step="any"></p>
                    <p><input class="w3-input w3-round w3-border" type="number" name="subject_totalhours" placeholder="Total Hours"></p>
                    <p class="w3-center">
                        <button class="w3-button w3-green w3-round" type="submit">Create</button>
                    </p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>