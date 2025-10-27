<script lang="ts" setup>
import DocumentoSda, { type Documento } from '@/components/DocumentoSda.vue'

const adminPersonas: Documento[] = [
  {
    nombre: 'Planilla horas extras',
    ruta: 'http://10.4.49.116/sist/documentos/sda_cr_de_las_personas/Planilla%20horas%20extra/Planilla%20Horas%20Extras%202024%20(enero_agosto).xlsx',
  },
  {
    nombre: 'Firma compromiso de confidencialidad de la información.',
    ruta: 'http://172.30.30.2/ineg/nuevo/',
  },
  {
    nombre: 'Formato de solicitudes de Permisos - Feriados - Descanso.',
    ruta: 'http://10.4.49.116/sist/documentos/sda_cr_de_las_personas/formulario_permiso_feriado_descanso_2023_corregido.pdf',
  },
  {
    nombre: 'Solicitud de devolución de tiempo.',
    ruta: 'http://10.4.49.116/sist/documentos/sda_cr_de_las_personas/formato_devolucion_de_tiempo.pdf',
  },
  {
    nombre: 'Formulario cambio de Turno.',
    ruta: 'http://10.4.49.116/sist/documentos/sda_cr_de_las_personas/formulario_cambio_de_turno_2018.pdf',
  },
  {
    nombre: 'Formulario cambio de Horario.',
    ruta: 'http://10.4.49.116/sist/documentos/sda_cr_de_las_personas/formulario_cambio_de_horario_2021.pdf',
  },
  {
    nombre: 'Permiso de Salud Funcionaria.',
    ruta: 'http://10.4.49.116/sist/documentos/sda_cr_de_las_personas/permiso_salud_funcionaria_2017.pdf',
  },
  {
    nombre: 'Formulario de solicitud reemplazos.',
    ruta: 'http://10.4.49.116/sist/documentos/sda_cr_de_las_personas/formulario_solicitud_de_reemplazos_2018.pdf',
  },
  {
    nombre: 'Formulario reemplazos.',
    ruta: 'http://10.4.49.116/sist/documentos/sda_cr_de_las_personas/formulario_de_reemplazos.pdf',
  },
  {
    nombre: 'Formularios de anotaciones de merito y demerito.',
    ruta: 'http://10.4.49.116/sist/documentos/sda_cr_de_las_personas/Anotacion_de_merito_y_demerito_hpl.pdf',
  },
  {
    nombre: 'Justificacion de no marcaje.',
    ruta: 'http://10.4.49.116/sist/documentos/sda_cr_de_las_personas/Justificacion_no_marcaje_hpl.pdf',
  },
  {
    nombre: 'Permiso sin goce de remuneraciones',
    ruta: 'http://10.4.49.116/sist/documentos/sda_cr_de_las_personas/PERMISO_SIN_GOCE_DE_REMUNERACIONES%20MOD2.pdf',
  },
  {
    nombre: 'Información de Teletrabajo',
    ruta: 'http://10.4.49.116/sist/documentos/sda_cr_de_las_personas/Informaci%C3%B3n%20de%20Teletrabajo.zip',
  },
]

const saludOcupacional: Documento[] = [
  {
    nombre:
      'Formulario de notificación de agresiones hacia los funcionarios de la Salud Publica. (FAF)',
    ruta: 'http://10.4.49.116/sist/documentos/sda_cr_de_las_personas/salud_del_personal/HPL.%20FAF.docx',
  },
  {
    nombre: 'Informe de accidente laboral.',
    ruta: 'http://10.4.49.116/sist/documentos/comite_paritario/Informe_accidente_laboral_2024.pdf',
  },
  {
    nombre: 'Formulario de declaracion de accidentes laborales DIAT.',
    ruta: 'http://10.4.49.116/sist/documentos/sda_cr_de_las_personas/salud_del_personal/DIAT_hpl.pdf',
  },
  {
    nombre: 'Formulario de declaracion de enfermedad profesional DIEP.',
    ruta: 'http://10.4.49.116/sist/documentos/sda_cr_de_las_personas/salud_del_personal/DIEP_hpl.pdf',
  },
  {
    nombre: 'Protocolo ante agresiones a personal de atención. V2 Octubre 2022.',
    ruta: 'http://10.4.49.116/sist/documentos/sda_cr_de_las_personas/salud_del_personal/prevencion%20riesgos/Protocolo+Ante+Agresi%C3%B3n+a+Personal+de+Atenci%C3%B3n+v2%20(1).pdf',
  },
  {
    nombre: 'Protocolo de Vigilancia de riesgos psicosociales en el trabajo. V1 Febrero 2024.',
    ruta: 'http://10.4.49.116/sist/documentos/sda_cr_de_las_personas/salud_del_personal/prevencion%20riesgos/Protocolo+de+Vigilancia+de+Riesgos+Psicosociales+en+el+Trabajo++V1%20(1).pdf',
  },
  {
    nombre: 'Resultados de Aplicación Cuestionario CEAL 2023.',
    ruta: 'http://10.4.49.116/sist/documentos/sda_cr_de_las_personas/salud_del_personal/prevencion%20riesgos/Resultados%20CEAL%202023.pdf',
  },
  {
    nombre:
      'Programa de Control de exposición del personal expuesto a radiación ionizante. V4 Noviembre 2020.',
    ruta: 'http://10.4.49.116/sist/documentos/sda_cr_de_las_personas/salud_del_personal/prevencion%20riesgos/Protocolo+Control+de+Exposici%C3%B3n+a+Radiaci%C3%B3n+Ionizante+RH+4.1%20(1).pdf',
  },
  {
    nombre:
      'Protocolo Manejo de funcionarios con Sospecha de Enfermedad profesional. V2 Febrero 2024.',
    ruta: 'http://10.4.49.116/sist/documentos/sda_cr_de_las_personas/salud_del_personal/prevencion%20riesgos/Protocolo+Manejo+de+Funcionarios+con+sospecha+de+enfermedad+Profesional+Hospital+Penco+Lirquen%20(1).pdf',
  },
  {
    nombre:
      'Protocolo de Manejo de la Exposición laboral a sangre y fluidos corporales potencialmente infectantes.',
    ruta: 'http://10.4.49.116/sist/documentos/sda_cr_de_las_personas/salud_del_personal/prevencion%20riesgos/Protocolo+de+Manejo+de+Exposici%C3%B3n+Laboral+a+Sangre+y+Fluidos+Corporales+RH+4.2+version+07.pdf',
  },
  {
    nombre: 'Infografía de acciones a seguir frente a accidente laboral cortopunzante.',
    ruta: 'http://10.4.49.116/sist/documentos/sda_cr_de_las_personas/salud_del_personal/prevencion%20riesgos/Accidente%20cortopunzante.pdf',
  },
  {
    nombre: 'Infografía de acciones a seguir frente a accidente de trayecto.',
    ruta: 'http://10.4.49.116/sist/documentos/sda_cr_de_las_personas/salud_del_personal/prevencion%20riesgos/Accidente%20de%20trayecto.pdf',
  },
  {
    nombre: 'Infografía de acciones a seguir frente a Accidente de trabajo.',
    ruta: 'http://10.4.49.116/sist/documentos/sda_cr_de_las_personas/salud_del_personal/prevencion%20riesgos/Accidente%20de%20trabajo%20flujograma.pdf',
  },
  {
    nombre: 'Protocolo de acciones a seguir frente a accidentes laborales para funcionarios HPL.',
    ruta: 'http://10.4.49.116/sist/documentos/comite_paritario/Protocolo+de+Acciones+a+Seguir+frente+accidentes+laborales+para+funcionarios+version+05.pdf',
  },
]

const bienestar: Documento[] = [
  {
    nombre: 'Formulario sugerencia funcionario/a',
    ruta: 'http://10.4.49.116/sist/documentos/sda_cr_de_las_personas/bienestar/formulario_de_sugerencia_hpl.pdf',
  },
  {
    nombre: 'Circular Nº9',
    ruta: 'http://10.4.49.116/sist/documentos/sda_cr_de_las_personas/bienestar/Circular_Num_9.pdf',
  },
  {
    nombre: 'Formulario afiliación a bienestar socios activos',
    ruta: 'http://10.4.49.116/sist/documentos/sda_cr_de_las_personas/bienestar/formulario_afiliacion_a_bienestar_de_socios_activos.pdf',
  },
  {
    nombre: 'Formulario afiliación a bienestar socios pasivos',
    ruta: 'http://10.4.49.116/sist/documentos/sda_cr_de_las_personas/bienestar/formulario_afiliacion_a_bienestar_socios_pasivos.pdf',
  },
  {
    nombre: 'Formulario desafiliación bienestar',
    ruta: 'http://10.4.49.116/sist/documentos/sda_cr_de_las_personas/bienestar/formulario_de_desafiliacion_bienestar.pdf',
  },
  {
    nombre: 'Formulario solicitud de beneficios',
    ruta: 'http://10.4.49.116/sist/documentos/sda_cr_de_las_personas/bienestar/formulario_solicitud_beneficios.doc',
  },
  {
    nombre: 'Formulario solicitud de prestamo',
    ruta: 'http://10.4.49.116/sist/documentos/sda_cr_de_las_personas/bienestar/formulario_solicitud_de_prestamo.pdf',
  },
]

const capacitacion: Documento[] = [
  {
    nombre: 'Reglamento de capacitación.',
    ruta: 'http://10.4.49.116/sist/documentos/sda_cr_de_las_personas/capacitacion/REGLAMENTO%20DE%20CAPACITACI%C3%93N.pdf',
  },
  {
    nombre: 'Formulario de solicitud de cursos.',
    ruta: 'http://10.4.49.116/sist/documentos/sda_cr_de_las_personas/capacitacion/Formato%20nuevo%20ficha%20de%20solicitud.docx',
  },
  {
    nombre: 'Formulario comisión de Servicio al Extranjero.',
    ruta: 'http://10.4.49.116/sist/documentos/sda_cr_de_las_personas/capacitacion/formularioComisionServicioExtranjero.rar',
  },
]

const activacionCargo: Documento[] = [
  {
    nombre: 'Solicitud Inicio Proceso',
    ruta: 'http://10.4.49.116/sist/documentos/sda_cr_de_las_personas/Solicitud%20Inicio%20Proceso%20HPL.docx',
  },
  {
    nombre: 'Descripcion y perfil del cargo',
    ruta: 'http://10.4.49.116/sist/documentos/sda_cr_de_las_personas/DESCRIPCI%C3%93N%20Y%20PERFIL%20DEL%20CARGO%202020.docx',
  },
]
</script>

<template>
  <div class="p-4 sm:ml-32 sm:mr-32">
    <h1 class="text-center text-3xl font-semibold">Subdirección de las Personas</h1>
    <div class="h-6" />

    <div class="grid w-full lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-4">
      <DocumentoSda nombre="Administración de las Personas" :documentos="adminPersonas" />
      <DocumentoSda
        nombre="Salud Ocupacional y Prevención de Riesgos"
        :documentos="saludOcupacional"
      />
      <DocumentoSda nombre="Bienestar" :documentos="bienestar" />
      <DocumentoSda nombre="Capacitación" :documentos="capacitacion" />
      <DocumentoSda nombre="Formato Activación de Cargo" :documentos="activacionCargo" />
    </div>
  </div>
</template>
