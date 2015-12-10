<!DOCTYPE html>
@extends('template')
@section('contenido')
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
							<span class="fa fa-file-text"></span> Pedidos
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
								<i class="fa fa-file-text"></i> Pedidos
							</li>
						</ol>
					</div>
					<div class="col-md-2">
						<button type="button" class="btn btn-block btn-primary">
							<span class="fa fa-plus"></span> Nuevo producto
						</button>
					</div>
				</div>
                <!-- /.row -->

				<!-- Content -->
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-bordered table-hover">
								<thead>
								<tr>
									<th style="width: 30px;"></th>
									<th>Número</th>
									<th>Cliente</th>
									<th>Total</th>
									<th>Fecha de registro</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>
										<button class="btn btn-default btn-xs dropdown-toggle" type="button">
											<span class="fa fa-eye"></span>
										</button>
									</td>
									<td>1001</td>
									<td>John Smith</td>
									<td class="text-right">120.00</td>
									<td class="text-center">2015-01-01 00:00</td>
								</tr>
								<tr>
									<td>
										<button class="btn btn-default btn-xs dropdown-toggle" type="button">
											<span class="fa fa-eye"></span>
										</button>
									</td>
									<td>1002</td>
									<td>John Smith</td>
									<td class="text-right">340.99</td>
									<td class="text-center">2015-01-01 00:00</td>
								</tr>
								<tr>
									<td>
										<button class="btn btn-default btn-xs dropdown-toggle" type="button">
											<span class="fa fa-eye"></span>
										</button>
									</td>
									<td>1003</td>
									<td>John Smith</td>
									<td class="text-right">20.00</td>
									<td class="text-center">2015-01-01 00:00</td>
								</tr>
								<tr>
									<td>
										<button class="btn btn-default btn-xs dropdown-toggle" type="button">
											<span class="fa fa-eye"></span>
										</button>
									</td>
									<td>1004</td>
									<td>John Smith</td>
									<td class="text-right">1000.00</td>
									<td class="text-center">2015-01-01 00:00</td>
								</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- /.row -->

            </div>
            <!-- /.container-fluid -->
@endsection

