<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Utilisateurs</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        h1 {
            margin-bottom: 20px;
        }
        .user-card {
            padding: 15px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            margin-bottom: 10px;
            background-color: #ffffff;
            transition: transform 0.2s;
        }
        .user-card:hover {
            transform: scale(1.02);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .username {
            font-size: 0.85rem;
            color: #6c757d;
        }
        .btn-follow {
            float: right;
        }
    </style>
</head>
@include('layouts.navbar')
<body>
    <div class="container mt-5">
        <h1 class="text-center">Liste d'Utilisateurs</h1>
        <ul class="list-group">
            @if($users->isNotEmpty())
                @foreach($users as $user)
                    <li class="list-group-item user-card">
                        <div>
                            <strong>{{ $user->prenom . ' ' . $user->nom }}</strong>
                            <span class="username">{{"@".$user->username }}</span>
                            <!-- if(!$user->followers->contains(Auth::user()->id))-->
                            @if (!Auth::user()->following->contains($user->id))
                                <form action="{{route('follow',$user)}}" method="post">
                                    @csrf
                                    <button type="submit" class ="btn btn-info">Follow</button>
                               </form>
                            @else
                                <form action="{{route('unfollow',$user)}}" method="post">
                                    @csrf
                                    <button type="submit" class ="btn btn-info">Unfollow</button>
                                </form>
                            @endif

                        </div>
                    </li>
                @endforeach
            @else
                <li class="list-group-item">Aucun utilisateur ne correspond à votre recherche</li>
            @endif
        </ul>
    </div>
</body>
</html>
