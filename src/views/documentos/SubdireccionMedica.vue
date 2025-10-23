<script setup lang="ts">
import DocumentoSda, { type Documento } from '@/components/DocumentoSda.vue'

const fc1: Documento[] = [
  {
    nombre: 'Consentimiento Informado',
    url: 'http://10.4.49.116/sist/documentos/sdm/Formulario%20Consentimiento%20Informado%202021.docx',
  },
  {
    nombre: 'Formulario notificación eventos adversos.',
    url: 'http://10.4.49.116/sist/documentos/calidad/formulario_notificacion_de_eventos_2018_b.pdf',
  },
  {
    nombre: 'Formulario análisis de Eventos Adversos.',
    url: 'http://10.4.49.116/sist/documentos/calidad/formulario_analisis_eventos_adversos_2018.pdf',
  },
  {
    nombre: 'Información TAC.',
    url: 'http://10.4.49.116/sist/documentos/sdm/INFORMACION%20TAC.pdf',
  },
  {
    nombre: 'Encuesta de seguridad TAC.',
    url: 'http://10.4.49.116/sist/documentos/sdm/2%20-%20ENCUESTA%20DE%20SEGURIDAD%20REACCION%20ADVERSA%20MEDIO%20DE%20CONTRASTE.pdf',
  },
]
const fc2: Documento[] = [
  {
    nombre: 'Formulario ENO.',
    url: 'http://10.4.49.116/sist/documentos/sdm_cr_atencion_cerrada/Formulario_ENO.pdf',
  },
  {
    nombre:
      'Notificación infecciones asociadas atención en salud y/o evento adverso en odontología.',
    url: 'http://10.4.49.116/sist/documentos/sdm_cr_atencion_cerrada/notificacion_infecciones_asociadas_atencion_en_salud_y-o_adverso_odontologia.pdf',
  },
  {
    nombre: 'Ficha notificación enfermedades transmitidas por alimentos (ETA).',
    url: 'http://10.4.49.116/sist/documentos/sdm_cr_atencion_cerrada/notificacion_enfermedades_transmitidas_por_alimentos_ETA.pdf',
  },
  {
    nombre: 'Unidad de Medicina Transfusional.',
    url: 'http://10.4.49.116/sist/documentos/sdm_cr_atencion_cerrada/unidad_medicina_transfusional.pdf',
  },
  {
    nombre: 'Normativa acompañamiento nocturno de familiares para pacientes adultos mayores.',
    url: 'http://10.4.49.116/sist/documentos/sdm/carta_compromiso_adulto.pdf',
  },
]
const fc3: Documento[] = [
  {
    nombre: 'Normativa acompañamiento nocturno de familiares para pacientes infantes.',
    url: 'http://10.4.49.116/sist/documentos/sdm/carta_compromiso_pediatria.pdf',
  },
  {
    nombre: 'Autorización de pacientes para ser filmados o fotografiados.',
    url: 'http://10.4.49.116/sist/documentos/sdm/autorizacion_pacientes_para_ser_filmados_o_fotografiados.pdf',
  },
  {
    nombre: 'Solicitud de evaluación de caso comité etica asistencia.',
    url: 'http://10.4.49.116/sist/documentos/sdm/SOLICITUD%20DE%20EVALUACI%C3%93N%20DE%20CASO%20COMIT%C3%89%20%C3%89TICA%20ASISTENCIAL.pdf',
  },
  {
    nombre: 'Formato para presentación de protocolo de investigación cientifica',
    url: 'http://10.4.49.116/sist/documentos/sdm/FORMATO%20PARA%20PRESENTACION%20DE%20PROTOCOLO%20DE%20INVESTIGACI%C3%93N%20CIENTIFICA.pdf',
  },
]

const reglamentoInterno: Documento[] = [
  {
    nombre: 'Documento reglamento interno de Hospital REV.2024',
    url: 'http://10.4.49.116/sist/documentos/sdm/Reglamento%20Interno%20V2%20Marzo%202024.pdf',
  },
]
const hospitalAmigo: Documento[] = [
  {
    nombre: 'Díptico Hospitalización',
    url: 'http://10.4.49.116/sist/documentos/sdm/hospital_amigo.pdf',
  },
]

const ucEmergencia: Documento[] = [
  {
    nombre: 'Informe de accidentes de tránsito colectivos',
    url: 'http://10.4.49.116/sist/documentos/sdm_cr_urgencia/informe_de__accidentes_de_transito_colectivos.pdf',
  },
]

const ucPabellon: Documento[] = [
  {
    nombre: 'Tarjeta Administración de Medicamentos',
    url: 'http://10.4.49.116/sist/documentos/sdm_cr_atencion_cerrada/tarjetas_adm_medicamentos.pdf',
  },
]

const ucFarmacia: Documento[] = [
  {
    nombre: 'Formulario de Antibióticos de Uso Restringido (FAUR)',
    url: 'http://10.4.49.116/sist/documentos/sdm_cr_apoyo_diagnostico/farmacia/faur%20editable%202022.pdf',
  },
  {
    nombre: 'Arsenal Farmacológico 2021',
    url: 'http://10.4.49.116/sist/documentos/sdm_cr_apoyo_diagnostico/farmacia/ARSENAL%20FARMACOLOGICO%20HOSPITAL%20PENCO%20LIRQUEN%20A%C3%91O%202021.pdf',
  },
  {
    nombre: 'Solicitud de Compra de Fármaco de Uso Ocasional',
    url: 'http://10.4.49.116/sist/documentos/sdm_cr_apoyo_diagnostico/farmacia/SOLICITUD%20DE%20COMPRA%20DE%20FARMACO%20DE%20USO%20OCASIONAL.pdf',
  },
  {
    nombre: 'Solicitud de Incorporación Medicamentos a Arsenal Farmacológico',
    url: 'http://10.4.49.116/sist/documentos/sdm_cr_apoyo_diagnostico/farmacia/SOLICITUD%20DE%20INCORPORACION%20MEDICAMENTOS%20A%20ARSENAL%20FARMACOLOGICO.pdf',
  },
  {
    nombre: 'Solicitud de Uso de Fármaco Restringido Por Especialidad',
    url: 'http://10.4.49.116/sist/documentos/sdm_cr_apoyo_diagnostico/farmacia/SOLICITUD%20DE%20USO%20DE%20FARMACO%20RESTRINGIDO%20POR%20ESPECIALIDAD%20.pdf',
  },
  {
    nombre: 'Registro de Canje',
    url: 'http://10.4.49.116/sist/documentos/sdm/REGISTRO%20DE%20CANJE.docx',
  },
  {
    nombre: 'Formulario de Bajas',
    url: 'http://10.4.49.116/sist/documentos/sdm/Formulario%20de%20bajas..docx',
  },
]

const ucGinecoObstetricia: Documento[] = [
  {
    nombre: 'Solicitud examen para detección de anticuerpos para VIH',
    url: 'http://10.4.49.116/sist/documentos/sdm/SOLICITUD%20DETECCI%C3%93N%20DE%20ANTICUERPOS%20VIH%202022%20FINAL.pdf',
  },
  {
    nombre: 'Consentimiento VIH Adulto',
    url: 'http://10.4.49.116/sist/documentos/sdm_cr_urgencia/CONSENTIMIENTO%20VIH%20ADULTO.docx',
  },
  {
    nombre: 'Solicitud de examen VDRL RPR',
    url: 'http://10.4.49.116/sist/documentos/sdm/SOLICITUD%20DE%20EXAMEN%20VDRL%20RPR%202022.pdf',
  },
]

const ucImagenologia: Documento[] = [
  {
    nombre: 'Consentimiento Informado TAC CC',
    url: 'http://10.4.49.116/sist/documentos/sdm_cr_apoyo_diagnostico/imagenologia/1-%20CONSENTIMIENTO%20INFORMADO%20TAC%20CC.pdf',
  },
  {
    nombre: 'Encuesta de Seguridad Reacción Adversa al Medio de Contraste',
    url: 'http://10.4.49.116/sist/documentos/sdm/2%20-%20ENCUESTA%20DE%20SEGURIDAD%20JULIO%202024.pdf',
  },
  {
    nombre: 'Solicitud de TAC en Situación de Riesgo Vital',
    url: 'http://10.4.49.116/sist/documentos/sdm_cr_apoyo_diagnostico/imagenologia/3-%20TAC%20EMERGENCIAS%20RIESGO%20VITAL.pdf',
  },
  {
    nombre: 'Consentimiento Informado Examen Radiológico',
    url: 'http://10.4.49.116/sist/documentos/sdm_cr_apoyo_diagnostico/imagenologia/4-%20CONS%20INFORMADO%20PCTS%20EMBARAZADAS.pdf',
  },
]
const ucEsterilizacion: Documento[] = [
  {
    nombre: 'Notificación Eventos de Material Esterilizado',
    url: 'http://10.4.49.116/sist/documentos/sdm_cr_apoyo_diagnostico/esterilizacion/notificacion_evento_material_esteril.pdf',
  },
]
</script>

<template>
  <div class="p-4 sm:ml-32 sm:mr-32">
    <h1 class="text-center text-3xl font-semibold">Subdirección Médica</h1>
    <div class="h-6" />

    <div class="grid w-full lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-4">
      <DocumentoSda nombre="Formularios Clínicos" :documentos="fc1" />
      <DocumentoSda nombre="Formularios Clínicos (Cont.)" :documentos="fc2" />
      <DocumentoSda nombre="Formularios Clínicos (Cont.)" :documentos="fc3" />
    </div>
    <div class="h-4" />
    <div class="grid w-full lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 gap-4">
      <DocumentoSda nombre="Reglamento Interno" :documentos="reglamentoInterno" />
      <DocumentoSda nombre="Hospital Amigo" :documentos="hospitalAmigo" />
      <DocumentoSda nombre="UC Emergencia" :documentos="ucEmergencia" />
      <DocumentoSda nombre="UC Pabellón" :documentos="ucPabellon" />
      <DocumentoSda nombre="UC Farmacia" :documentos="ucFarmacia" />
      <DocumentoSda nombre="UC Gineco-Obstetricia" :documentos="ucGinecoObstetricia" />
      <DocumentoSda nombre="UC Imagenología" :documentos="ucImagenologia" />
      <DocumentoSda nombre="UC Esterilización" :documentos="ucEsterilizacion" />
    </div>
  </div>
</template>
