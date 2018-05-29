<div class="panel panel-primary">
	<div class="panel-heading">Menu</div>
	<div class="panel-body">
		<div class="list-group">
 			@if(auth()->check())
				<a href="#" class="list-group-item list-group-item-action">
					Dashboard
				</a>
				<a href="#" class="list-group-item list-group-item-action">
					Ver solicitudes
				</a>
				<a href="#" class="list-group-item list-group-item-action">
					Administración
				</a>
			@else
				<a href="#" class="list-group-item list-group-item-action">
					Bienvenido
				</a>
				<a href="#" class="list-group-item list-group-item-action">
					Instrucciones
				</a>
				<a href="#" class="list-group-item list-group-item-action">
					Créditos
				</a>
			@endif
		</div>
	</div>
</div>

