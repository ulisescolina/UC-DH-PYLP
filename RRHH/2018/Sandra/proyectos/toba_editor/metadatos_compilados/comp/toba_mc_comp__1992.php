<?php

class toba_mc_comp__1992
{
	static function get_metadatos()
	{
		return array (
  '_info' => 
  array (
    'proyecto' => 'toba_editor',
    'objeto' => 1992,
    'anterior' => NULL,
    'identificador' => NULL,
    'reflexivo' => NULL,
    'clase_proyecto' => 'toba',
    'clase' => 'toba_ei_cuadro',
    'subclase' => NULL,
    'subclase_archivo' => NULL,
    'objeto_categoria_proyecto' => NULL,
    'objeto_categoria' => NULL,
    'nombre' => 'Catalogo - pant_inicial - tablas',
    'titulo' => 'Tablas',
    'colapsable' => 1,
    'descripcion' => NULL,
    'fuente_proyecto' => NULL,
    'fuente' => NULL,
    'solicitud_registrar' => NULL,
    'solicitud_obj_obs_tipo' => NULL,
    'solicitud_obj_observacion' => NULL,
    'parametro_a' => NULL,
    'parametro_b' => NULL,
    'parametro_c' => NULL,
    'parametro_d' => NULL,
    'parametro_e' => NULL,
    'parametro_f' => NULL,
    'usuario' => NULL,
    'creacion' => '2007-07-19 18:12:13',
    'punto_montaje' => 12,
    'clase_editor_proyecto' => 'toba_editor',
    'clase_editor_item' => '1000253',
    'clase_archivo' => 'nucleo/componentes/interface/toba_ei_cuadro.php',
    'clase_vinculos' => NULL,
    'clase_editor' => '1000253',
    'clase_icono' => 'objetos/cuadro_array.gif',
    'clase_descripcion_corta' => 'ei_cuadro',
    'clase_instanciador_proyecto' => 'toba_editor',
    'clase_instanciador_item' => '1843',
    'objeto_existe_ayuda' => NULL,
    'ap_clase' => NULL,
    'ap_archivo' => NULL,
    'ap_punto_montaje' => NULL,
    'cant_dependencias' => 0,
    'posicion_botonera' => 'abajo',
  ),
  '_info_eventos' => 
  array (
    0 => 
    array (
      'evento_id' => 30000110,
      'identificador' => 'agregar',
      'etiqueta' => 'Agregar',
      'maneja_datos' => 1,
      'sobre_fila' => 0,
      'confirmacion' => NULL,
      'estilo' => NULL,
      'imagen_recurso_origen' => 'apex',
      'imagen' => 'nucleo/agregar.gif',
      'en_botonera' => 1,
      'ayuda' => NULL,
      'ci_predep' => NULL,
      'implicito' => NULL,
      'defecto' => NULL,
      'grupo' => NULL,
      'accion' => 'V',
      'accion_imphtml_debug' => NULL,
      'accion_vinculo_carpeta' => '1000248',
      'accion_vinculo_item' => '1000250',
      'accion_vinculo_objeto' => NULL,
      'accion_vinculo_popup' => 0,
      'accion_vinculo_popup_param' => NULL,
      'accion_vinculo_celda' => 'central',
      'accion_vinculo_target' => 'frame_centro',
      'accion_vinculo_servicio' => NULL,
      'es_seleccion_multiple' => 0,
      'es_autovinculo' => 0,
    ),
  ),
  '_info_puntos_control' => 
  array (
  ),
  '_info_cuadro' => 
  array (
    'titulo' => NULL,
    'subtitulo' => NULL,
    'sql' => NULL,
    'columnas_clave' => 'proyecto, objeto',
    'clave_datos_tabla' => 0,
    'archivos_callbacks' => NULL,
    'ancho' => '100%',
    'ordenar' => 0,
    'exportar_paginado' => 0,
    'exportar_xls' => 0,
    'exportar_pdf' => 0,
    'paginar' => 0,
    'tamano_pagina' => NULL,
    'tipo_paginado' => 'P',
    'scroll' => 0,
    'alto' => NULL,
    'eof_invisible' => 0,
    'eof_customizado' => 'No hay datos_tablas definidos',
    'pdf_respetar_paginacion' => NULL,
    'pdf_propiedades' => NULL,
    'asociacion_columnas' => NULL,
    'dao_nucleo_proyecto' => NULL,
    'dao_clase' => NULL,
    'dao_metodo' => NULL,
    'dao_parametros' => NULL,
    'dao_archivo' => '',
    'cc_modo' => 't',
    'cc_modo_anidado_colap' => 0,
    'cc_modo_anidado_totcol' => NULL,
    'cc_modo_anidado_totcua' => NULL,
    'columna_descripcion' => NULL,
    'mostrar_total_registros' => 0,
    'siempre_con_titulo' => 1,
  ),
  '_info_cuadro_columna' => 
  array (
    0 => 
    array (
      'orden' => '1',
      'objeto_cuadro_col' => 606,
      'titulo' => NULL,
      'estilo_titulo' => NULL,
      'estilo' => 'col-tex-p1',
      'ancho' => NULL,
      'clave' => 'icono',
      'formateo' => 'NULO',
      'no_ordenar' => 1,
      'mostrar_xls' => NULL,
      'mostrar_pdf' => NULL,
      'pdf_propiedades' => NULL,
      'total' => 0,
      'vinculo_indice' => NULL,
      'usar_vinculo' => 0,
      'total_cc' => NULL,
      'permitir_html' => 1,
      'grupo' => NULL,
      'evento_asociado' => NULL,
    ),
    1 => 
    array (
      'orden' => '2',
      'objeto_cuadro_col' => 607,
      'titulo' => NULL,
      'estilo_titulo' => NULL,
      'estilo' => 'col-tex-p1',
      'ancho' => '100%',
      'clave' => 'tabla',
      'formateo' => 'NULO',
      'no_ordenar' => 0,
      'mostrar_xls' => NULL,
      'mostrar_pdf' => NULL,
      'pdf_propiedades' => NULL,
      'total' => 0,
      'vinculo_indice' => NULL,
      'usar_vinculo' => 0,
      'total_cc' => NULL,
      'permitir_html' => 0,
      'grupo' => NULL,
      'evento_asociado' => NULL,
    ),
    2 => 
    array (
      'orden' => '3',
      'objeto_cuadro_col' => 612,
      'titulo' => NULL,
      'estilo_titulo' => NULL,
      'estilo' => 'col-num-p1',
      'ancho' => NULL,
      'clave' => 'editar',
      'formateo' => 'indivisible',
      'no_ordenar' => 1,
      'mostrar_xls' => NULL,
      'mostrar_pdf' => NULL,
      'pdf_propiedades' => NULL,
      'total' => 0,
      'vinculo_indice' => NULL,
      'usar_vinculo' => 0,
      'total_cc' => NULL,
      'permitir_html' => 1,
      'grupo' => NULL,
      'evento_asociado' => NULL,
    ),
  ),
  '_info_cuadro_cortes' => 
  array (
    0 => 
    array (
      'orden' => '1',
      'columnas_id' => 'fuente',
      'columnas_descripcion' => 'fuente',
      'identificador' => 'fuente',
      'pie_contar_filas' => '0',
      'pie_mostrar_titular' => 0,
      'pie_mostrar_titulos' => 0,
      'modo_inicio_colapsado' => 0,
      'imp_paginar' => NULL,
      'descripcion' => NULL,
      'objeto_cuadro_cc' => 27,
    ),
  ),
  '_info_sum_cuadro_cortes' => 
  array (
  ),
);
	}

}

?>