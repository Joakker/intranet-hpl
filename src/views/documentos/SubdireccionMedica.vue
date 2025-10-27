<script setup lang="ts">
import DocumentoSda, { type Documento } from '@/components/DocumentoSda.vue'

const divide = <T,>(array: T[]): [T[], T[], T[]] => {
  const total = array.length
  const chunk = Math.ceil(total / 3)

  const a1 = array.slice(0, chunk)
  const a2 = array.slice(chunk, chunk * 2)
  const a3 = array.slice(chunk * 2)

  return [a1, a2, a3]
}

const response1 = await fetch('/api/docs/5')
const formulariosClinicos: Documento[] = await response1.json()
const [f1, f2, f3] = divide(formulariosClinicos)

const response2 = await fetch('/api/docs/6')
const reglamentoInterno: Documento[] = await response2.json()

const response3 = await fetch('/api/docs/7')
const hospitalAmigo: Documento[] = await response3.json()

const ucEmergencia: Documento[] = [
  {
    nombre: 'Informe de accidentes de tránsito colectivos',
    ruta: 'http://10.4.49.116/sist/documentos/sdm_cr_urgencia/informe_de__accidentes_de_transito_colectivos.pdf',
  },
]

const ucPabellon: Documento[] = [
  {
    nombre: 'Tarjeta Administración de Medicamentos',
    ruta: 'http://10.4.49.116/sist/documentos/sdm_cr_atencion_cerrada/tarjetas_adm_medicamentos.pdf',
  },
]

const ucFarmacia: Documento[] = [
  {
    nombre: 'Formulario de Antibióticos de Uso Restringido (FAUR)',
    ruta: 'http://10.4.49.116/sist/documentos/sdm_cr_apoyo_diagnostico/farmacia/faur%20editable%202022.pdf',
  },
  {
    nombre: 'Arsenal Farmacológico 2021',
    ruta: 'http://10.4.49.116/sist/documentos/sdm_cr_apoyo_diagnostico/farmacia/ARSENAL%20FARMACOLOGICO%20HOSPITAL%20PENCO%20LIRQUEN%20A%C3%91O%202021.pdf',
  },
  {
    nombre: 'Solicitud de Compra de Fármaco de Uso Ocasional',
    ruta: 'http://10.4.49.116/sist/documentos/sdm_cr_apoyo_diagnostico/farmacia/SOLICITUD%20DE%20COMPRA%20DE%20FARMACO%20DE%20USO%20OCASIONAL.pdf',
  },
  {
    nombre: 'Solicitud de Incorporación Medicamentos a Arsenal Farmacológico',
    ruta: 'http://10.4.49.116/sist/documentos/sdm_cr_apoyo_diagnostico/farmacia/SOLICITUD%20DE%20INCORPORACION%20MEDICAMENTOS%20A%20ARSENAL%20FARMACOLOGICO.pdf',
  },
  {
    nombre: 'Solicitud de Uso de Fármaco Restringido Por Especialidad',
    ruta: 'http://10.4.49.116/sist/documentos/sdm_cr_apoyo_diagnostico/farmacia/SOLICITUD%20DE%20USO%20DE%20FARMACO%20RESTRINGIDO%20POR%20ESPECIALIDAD%20.pdf',
  },
  {
    nombre: 'Registro de Canje',
    ruta: 'http://10.4.49.116/sist/documentos/sdm/REGISTRO%20DE%20CANJE.docx',
  },
  {
    nombre: 'Formulario de Bajas',
    ruta: 'http://10.4.49.116/sist/documentos/sdm/Formulario%20de%20bajas..docx',
  },
]

const ucGinecoObstetricia: Documento[] = [
  {
    nombre: 'Solicitud examen para detección de anticuerpos para VIH',
    ruta: 'http://10.4.49.116/sist/documentos/sdm/SOLICITUD%20DETECCI%C3%93N%20DE%20ANTICUERPOS%20VIH%202022%20FINAL.pdf',
  },
  {
    nombre: 'Consentimiento VIH Adulto',
    ruta: 'http://10.4.49.116/sist/documentos/sdm_cr_urgencia/CONSENTIMIENTO%20VIH%20ADULTO.docx',
  },
  {
    nombre: 'Solicitud de examen VDRL RPR',
    ruta: 'http://10.4.49.116/sist/documentos/sdm/SOLICITUD%20DE%20EXAMEN%20VDRL%20RPR%202022.pdf',
  },
]

const ucImagenologia: Documento[] = [
  {
    nombre: 'Consentimiento Informado TAC CC',
    ruta: 'http://10.4.49.116/sist/documentos/sdm_cr_apoyo_diagnostico/imagenologia/1-%20CONSENTIMIENTO%20INFORMADO%20TAC%20CC.pdf',
  },
  {
    nombre: 'Encuesta de Seguridad Reacción Adversa al Medio de Contraste',
    ruta: 'http://10.4.49.116/sist/documentos/sdm/2%20-%20ENCUESTA%20DE%20SEGURIDAD%20JULIO%202024.pdf',
  },
  {
    nombre: 'Solicitud de TAC en Situación de Riesgo Vital',
    ruta: 'http://10.4.49.116/sist/documentos/sdm_cr_apoyo_diagnostico/imagenologia/3-%20TAC%20EMERGENCIAS%20RIESGO%20VITAL.pdf',
  },
  {
    nombre: 'Consentimiento Informado Examen Radiológico',
    ruta: 'http://10.4.49.116/sist/documentos/sdm_cr_apoyo_diagnostico/imagenologia/4-%20CONS%20INFORMADO%20PCTS%20EMBARAZADAS.pdf',
  },
]
const ucEsterilizacion: Documento[] = [
  {
    nombre: 'Notificación Eventos de Material Esterilizado',
    ruta: 'http://10.4.49.116/sist/documentos/sdm_cr_apoyo_diagnostico/esterilizacion/notificacion_evento_material_esteril.pdf',
  },
]
</script>

<template>
  <div class="p-4 sm:ml-32 sm:mr-32">
    <h1 class="text-center text-3xl font-semibold">Subdirección Médica</h1>
    <div class="h-6" />

    <div class="grid w-full lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-4">
      <DocumentoSda nombre="Formularios Clínicos" :documentos="f1" />
      <DocumentoSda nombre="Formularios Clínicos (Cont.)" :documentos="f2" />
      <DocumentoSda nombre="Formularios Clínicos (Cont.)" :documentos="f3" />
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
