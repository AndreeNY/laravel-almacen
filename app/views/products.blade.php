@extends('template')
@section('contenido')

<div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
							<span class="fa fa-cube"></span> Productos
							<small>Subtitle</small>
						</h1>
                    </div>
                </div>
				<!-- /.row -->

				<!-- Breadcrumb & Actions -->
				<div class="row">
					<div class="col-md-10">
						<ol class="breadcrumb">
							<li>
								<i class="fa fa-home"></i>  <a href="index.html">Inicio</a>
							</li>
							<li class="active">
								<i class="fa fa-cube"></i> Productos
							</li>
						</ol>
					</div>
					<div class="col-md-2">
						<button type="button" class="btn btn-block btn-primary">
							<span class="fa fa-plus"></span> Nuevo producto
						</button>
					</div>
				</div>

</div>
            <!-- /.container-fluid -->
 @endsection

