 <?php $pagActual = $_SERVER['REQUEST_URI'];	?>
 <?php $linkMenu="index.php";?>
		<div class="slim_scroll">
				<div class="side_nav_actions">
					<a href="javascript:void(0)" id="side_fixed_nav_toggle"><span class=""></span></a>
					<!--<div id="toogle_nav_visible" class="make-switch switch-mini" data-on="success" data-on-label="<i class='icon-lock'></i>" data-off-label="<i class='icon-unlock-alt'></i>">
						<input id="nav_visible_input" type="checkbox">
					</div>-->
				</div>
				<ul id="text_nav_side_fixed">
					
					
					<li>
						<a href="javascript:void(0)"><span class="icon-cogs"></span>Gestión</a>
						<ul>
							<li class="<?php if(strpos($pagActual, "usuarios.php") or strpos($pagActual, "usuario.php")){echo "link_active";}?>"><a href="usuarios.php">Usuarios</a></li>
							<li class="<?php if(strpos($pagActual, "equipo_trabajo.php") or strpos($pagActual, "personal.php")){echo "link_active";}?>"><a href="equipo_trabajo.php">Equipo Medico</a></li>
							<!--<li><a href="altaD.php"></a></li>-->
							<!--<li><a href="form_multiupload.html">Multiupload</a></li>-->
							
						</ul>

					</li>
					<li>
						<a href="javascript:void(0)"><span class="icon-cogs"></span>Sistema</a>
						<ul>
						<li class="<?php if(strpos($pagActual, "categorias.php") or strpos($pagActual, "categoria.php")){echo "link_active";}?>"><a href="categorias.php">Categorías </a></li>	
							<!--<li class="<?php //if(strpos($pagActual, "seccion.php")){echo "link_active";}?>"><a href="demo.php">Servicios</a></li>
							<li class="<?php //if(strpos($pagActual, ".php")){echo "link_active";}?>"><a href="demo.php">Proyectos</a></li>
							<li class="<?php //if(strpos($pagActual, ".php") or strpos($pagActual, "usuario.php")){echo "link_active";}?>"><a href="demo.php">Noticias</a></li>
							<li class="<?php //if(strpos($pagActual, ".php")){echo "link_active";}?>"><a href="demo.php">Bolsa de Trabajo</a></li>
							<li class="<?php //if(strpos($pagActual, ".php")){echo "link_active";}?>"><a href="demo.php">Servicio a Proveedores</a></li>
							<li class="<?php //if(strpos($pagActual, ".php")){echo "link_active";}?>"><a href="demo.php">Contacto</a></li><!--<li><a href="altaD.php"></a></li>-->
						
							
						</ul>

					</li>
					<!--<li>
						<a href="javascript:void(0)"><span class="icon-list-alt"></span>Eventos</a>
						<ul>
							<li class="<?php// if(strpos($pagActual, "evento.php")){echo "link_active";}?>"><a href="evento.php">Crear Evento</a></li>
							<li class="<?php// if(strpos($pagActual, "eventos.php")){echo "link_active";}?>"><a href="eventos.php">Eventos</a></li>
						</ul>
					</li>
					<li>
						<a href="javascript:void(0)"><span class="icon-group icon-2x"></span>Participantes</a>
						<ul>
							<li class="<?php// if(strpos($pagActual, "lista.php")){echo "link_active";}?>"><a href="lista.php">Participantes</a></li>
						</ul>
					</li>-->

				</ul>
			</div>
