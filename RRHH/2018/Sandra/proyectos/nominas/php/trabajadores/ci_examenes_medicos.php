<?php
class ci_examenes_medicos extends nominas_ci
{
    protected $s__fecha_actual;
	protected $s__seleccion;
	protected $s__id_trabajador;
	
	//-----------------------------------------------------------------------------------
	//---- Eventos ----------------------------------------------------------------------
	//-----------------------------------------------------------------------------------
	function conf()
	{
		if (toba::zona()->cargada()) {
			$this->s__id_trabajador=toba::zona()->get_editable();
		
			toba::zona()->resetear();
		}else{
			if (toba::memoria()->get_parametro('id_trabajador') != '' ) {
				$this->s__id_trabajador=toba::memoria()->get_parametro('id_trabajador');
			}
		}
		if ($this->s__id_trabajador != '' ) {		
			$this->get_relacion()->cargar(array('id_trabajador'=>$this->s__id_trabajador));
        }
	}
    function resetear()
	{
		$this->dep('dr_trabajadores')->resetear();

	}
	function get_relacion(){
		return $this->dependencia('dr_trabajadores');
	}
	function evt__cancelar()
	{
        toba::vinculador()->navegar_a(null,103000338,array('id_trabajador'=>$this->s__id_trabajador));
	}
    function ini__operacion()
	{
		$this->s__fecha_actual= new toba_fecha();
	}
	//-----------------------------------------------------------------------------------
	//---- cuadro -----------------------------------------------------------------------
	//-----------------------------------------------------------------------------------

	function conf__cuadro(nominas_ei_cuadro $cuadro)
	{
        $fila=$this->get_relacion()->tabla('examenes_trabajadores')->get_filas(array('id_trabajador'=>$this->s__id_trabajador),false);
		if(isset($fila) && count($fila)>0){
            
            foreach ($fila as $clave => $valor) {
                $buscarte=dao_consultas::get_tipos_examenes(array('id_tipo_examen'=>$fila[$clave]['id_tipo_examen']));
                $fila[$clave]['tipo_examen'] = $buscarte[0]['nombre'];
                
                $buscarre=dao_consultas::get_resultados_examenes(array('id_resultado'=>$fila[$clave]['id_resultado_examen']));
                $fila[$clave]['resultado_examen'] = $buscarre[0]['nombre'];
            }
			$cuadro->set_datos($fila);
		}
	}

	function evt__cuadro__seleccion($seleccion)
	{
        $this->s__seleccion=$seleccion;
	}

	//-----------------------------------------------------------------------------------
	//---- formulario -------------------------------------------------------------------
	//-----------------------------------------------------------------------------------

	function conf__formulario(nominas_ei_formulario $form)
	{
        $datos ="";
        
        if(isset($this->s__seleccion)){//Se esta editando un registro
            $this->dep("formulario")->eliminar_evento('alta');
            
            $datos = $this->get_datos($this->s__seleccion);
            if($datos['fecha_nuevo_estudio']!=null){
                $datos['repetir']='SI';
            }
        }else{//Es un registro nuevo
            $this->dep("formulario")->eliminar_evento('baja');
            $this->dep("formulario")->eliminar_evento('modificacion');
            $datos['fecha'] = $this->s__fecha_actual->get_fecha_db();
        }
        $form->set_datos($datos);

	}

	function evt__formulario__alta($datos)
	{
        try{
            $id = $this->agregar_datos($datos);
            $this->dep('dr_trabajadores')->sincronizar();
            $this->resetear();

        }catch(toba_error $e){
            $this->eliminar_licencias_trabajadores($id);
            throw new toba_error('Ya se ha registrado este dato');
        }
	}
    function get_datos($id) {
        $this->get_relacion()->tabla('examenes_trabajadores')->set_cursor($id);
        return $this->get_relacion()->tabla('examenes_trabajadores')->get();
    }
    
    function agregar_datos($dato) {
        $id = $this->get_relacion()->tabla('examenes_trabajadores')->nueva_fila($dato);
		return $id;
    }
     function eliminar_datos($id) {
        $this->$this->get_relacion()->tabla('examenes_trabajadores')->eliminar_fila($id);
    }
    function modificar_datos($id, $dato, $mod) {
        $this->get_relacion()->tabla('examenes_trabajadores')->set_cursor($id);
        $this->get_relacion()->tabla('examenes_trabajadores')->set($dato);
    }
	function evt__formulario__baja()
	{
        if(isset($this->s__seleccion)){
            $this->eliminar_datos($this->s__seleccion);
            $this->dep('dr_trabajadores')->sincronizar();
            $this->resetear();
        
        }
        unset($this->s__seleccion);
	}

	function evt__formulario__modificacion($datos)
	{
        $this->modificar_datos($this->s__seleccion, $datos);
        $this->dep('dr_trabajadores')->sincronizar();
        $this->resetear();
        
        unset($this->s__seleccion);
	}

	function evt__formulario__cancelar()
	{
         unset($this->s__seleccion);
	}

}
?>