------------------------------------------------------------
--[103000335]--  Listado de trabajadores 
------------------------------------------------------------

------------------------------------------------------------
-- apex_item
------------------------------------------------------------

--- INICIO Grupo de desarrollo 103
INSERT INTO apex_item (item_id, proyecto, item, padre_id, padre_proyecto, padre, carpeta, nivel_acceso, solicitud_tipo, pagina_tipo_proyecto, pagina_tipo, actividad_buffer_proyecto, actividad_buffer, actividad_patron_proyecto, actividad_patron, nombre, descripcion, punto_montaje, actividad_accion, menu, orden, solicitud_registrar, solicitud_obs_tipo_proyecto, solicitud_obs_tipo, solicitud_observacion, solicitud_registrar_cron, prueba_directorios, zona_proyecto, zona, zona_orden, zona_listar, imagen_recurso_origen, imagen, parametro_a, parametro_b, parametro_c, publico, redirecciona, usuario, exportable, creacion, retrasar_headers) VALUES (
	NULL, --item_id
	'nominas', --proyecto
	'103000335', --item
	NULL, --padre_id
	'nominas', --padre_proyecto
	'103000333', --padre
	'0', --carpeta
	'0', --nivel_acceso
	'web', --solicitud_tipo
	'nominas', --pagina_tipo_proyecto
	'nomina_pagina_menu', --pagina_tipo
	NULL, --actividad_buffer_proyecto
	NULL, --actividad_buffer
	NULL, --actividad_patron_proyecto
	NULL, --actividad_patron
	'Listado de trabajadores', --nombre
	NULL, --descripcion
	'103000003', --punto_montaje
	NULL, --actividad_accion
	'1', --menu
	'2', --orden
	'0', --solicitud_registrar
	NULL, --solicitud_obs_tipo_proyecto
	NULL, --solicitud_obs_tipo
	NULL, --solicitud_observacion
	NULL, --solicitud_registrar_cron
	NULL, --prueba_directorios
	'nominas', --zona_proyecto
	'zona_nomina1', --zona
	NULL, --zona_orden
	'0', --zona_listar
	'apex', --imagen_recurso_origen
	'objetos/lista.gif', --imagen
	NULL, --parametro_a
	NULL, --parametro_b
	NULL, --parametro_c
	'0', --publico
	NULL, --redirecciona
	NULL, --usuario
	'0', --exportable
	'2018-10-29 09:39:23', --creacion
	'0'  --retrasar_headers
);
--- FIN Grupo de desarrollo 103

------------------------------------------------------------
-- apex_item_objeto
------------------------------------------------------------
INSERT INTO apex_item_objeto (item_id, proyecto, item, objeto, orden, inicializar) VALUES (
	NULL, --item_id
	'nominas', --proyecto
	'103000335', --item
	'103001414', --objeto
	'0', --orden
	NULL  --inicializar
);
