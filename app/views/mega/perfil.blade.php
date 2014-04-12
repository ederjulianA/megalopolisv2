@extends('layouts.empresa')

@section('content')
	
	<div id="main-container">

		<div class="padding-md">

			<div class="row">
				<div class="col-md-12">
					<h2>Usuario : <span class="label label-warning"> {{$user->username}} </span></h2>
					</div>
				
			</div>
					
					

				 <div class="row">
					<div class="row">
							<div class="col-md-3  col-sm-3">
								<div class="col-xs-6 col-sm-12 col-md-6 text-center">
								<a href="#">
									{{ HTML::image($user->empresa->logo)}}
								</a>
								<div class="seperator"></div>
								<div class="seperator"></div>
							</div><!-- /.col -->
							<div class="col-xs-6 col-sm-12 col-md-6">
								<strong class="font-14">{{$user->empresa->razon_social}}</strong>
								<small class="block text-muted">
									{{$user->email}}
								</small> 
								<div class="seperator"></div>
								<a class="btn btn-success btn-xs m-bottom-sm">Redes Sociales</a>
								<div class="seperator"></div>
								<a href="#" class="social-connect tooltip-test facebook-hover pull-left m-right-xs" data-toggle="tooltip" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
								<a href="#" class="social-connect tooltip-test twitter-hover pull-left m-right-xs" data-toggle="tooltip" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
								<a href="#" class="social-connect tooltip-test google-plus-hover pull-left m-right-xs" data-toggle="tooltip" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a>
								<div class="seperator"></div>
								<div class="seperator"></div>
							</div><!-- /.col -->
							</div><!-- /.col -->



							<div class="col-md-9 col-sm-9">

											<div class="row">
												<div class="panel panel-info pull-right">
														<div class="panel-body">
															Ultima Actualizacion:  {{$user->empresa->updated_at}}
														</div>
												</div><!-- /panel -->
											</div><!-- /.row -->



										<div class="panel panel-default">
									<form class="form-horizontal form-border" method="post" action="{{ URL::route('empresa-actualizar-info-post')}}">
										<div class="panel-heading">
											Editar Perfil
										</div>

										<input type="hidden" name="id_empresa" value="{{ $user->empresa->id}}">
										<div class="panel-body">
											<div class="form-group">
												<label class="control-label col-md-2" >Razon Social</label>												
												<div class="col-md-10">
													<input type="text" class="form-control input-sm" name="razon_social" placeholder="empresa" value="{{ $user->empresa->razon_social}}">
												</div><!-- /.col -->
											</div><!-- /form-group -->
											
										
										
											<div class="form-group">
												<label class="control-label col-md-2">Descripcion Breve</label>
												<div class="col-md-10">
													<textarea class="form-control" rows="3" name="descripcion_breve">
														{{$user->empresa->desc_breve}}
													</textarea>
												</div><!-- /.col -->
											</div><!-- /form-group -->

											<div class="form-group">
												<label class="control-label col-md-2">Descripcion Larga</label>
												<div class="col-md-10">
													<textarea class="form-control" rows="5" name="descripcion_larga">
														{{$user->empresa->desc_larga}}
													</textarea>
												</div><!-- /.col -->
											</div><!-- /form-group -->
										
										</div>
										<div class="panel-footer">
											<div class="text-right">
												<button class="btn btn-sm btn-success">	Actualizar</button>
												
											</div>
										</div>
										{{ Form::token()}}
									</form>
								</div><!-- /panel -->
								
								
							</div><!-- /.col -->



						</div><!-- /.row -->




				
			</div>
			
		</div>




	</div>
	
@stop