<!DOCTYPE html>
<html>
<head>
	<title>Authentikasi Manual pada Laravel</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark navbar-dark p-2">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">Laravel</a>
			<ul class="navbar-nav ms-auto">
				@auth
				<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				Welcome Back, {{ auth()->user()->name }}
				</a>
				<ul class="dropdown-menu">
					<li><a class="dropdown-item" href="/dashboard/posts">My Dashboard</a></li>
					<li><a class="dropdown-item" href="/profil">Profil</a></li>
					<li><hr class="dropdown-divider"></li>
						<form action = "/logout" method="post">
							@csrf
							<button type="submit" class="dropdown-item"><i class="bi bi-arrow-right-square"></i>Logout</button>
						</form>	
				</ul>
			</li> 
				@else
					<li class="nav-item">
				<a class="nav-link" href="/login">Login</a>
			</li>
				@endauth		
	</ul>
	</div>
	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
	</button>

</nav>
<div class="container mt-5 mb-5">
@yield('content')
</div>
</body>
<footer>
@yield('footer')
</footer>
