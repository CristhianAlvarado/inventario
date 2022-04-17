<?php

namespace Database\Seeders;

use App\Models\TipoCdp;
use Illuminate\Database\Seeder;

class TipoCdpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoCdp::insert(['numero' => '00', 'descripcion' => 'Otros']);
        TipoCdp::insert(['numero' => '01', 'descripcion' => 'Factura']);
        TipoCdp::insert(['numero' => '02', 'descripcion' => 'Recibo por Honorarios']);
        TipoCdp::insert(['numero' => '03', 'descripcion' => 'Boleta de Venta']);
        TipoCdp::insert(['numero' => '04', 'descripcion' => 'Liquidación de compra']);
        TipoCdp::insert(['numero' => '05', 'descripcion' => 'Boleto de compañía de aviación por el servicio de transporte aéreo de pasajeros']);
        TipoCdp::insert(['numero' => '06', 'descripcion' => 'Carta de porte por el servicio de transporte de carga aérea']);
        TipoCdp::insert(['numero' => '07', 'descripcion' => 'Nota de crédito']);
        TipoCdp::insert(['numero' => '08', 'descripcion' => 'Nota de débito']);
        TipoCdp::insert(['numero' => '09', 'descripcion' => 'Guía de Remisión - Remitente']);
        TipoCdp::insert(['numero' => '10', 'descripcion' => 'Recibo por Arrendamiento']);
        TipoCdp::insert(['numero' => '11', 'descripcion' => 'Póliza emitica por las Bolsas de Valores, Bolsas de Productos o Agentes de Intermediación por operaciones']);
        TipoCdp::insert(['numero' => '12', 'descripcion' => 'Ticket o cinta emitido por máquina registradora']);
        TipoCdp::insert(['numero' => '13', 'descripcion' => 'Documento emitido por bancos, instituciones financieras, crediticias, y de seguros que se encuentran bajo el control de la Superintendencia de Banca y Seguros']);
        TipoCdp::insert(['numero' => '14', 'descripcion' => 'Recibo por servicios públicos de suministro de energía eléctrica, agua, teléfono, telex y telegráficos y otros servicios complementarios que se incluyan en el recibo de servicio público']);
        TipoCdp::insert(['numero' => '15', 'descripcion' => 'Boleto emitido por las empresas de transporte público urbano de pasajeros']);
        TipoCdp::insert(['numero' => '16', 'descripcion' => 'Boleto de viaje emitido por las empresas de transporte público interprovincial de pasajeros dentro del país']);
        TipoCdp::insert(['numero' => '17', 'descripcion' => 'Documento emitido por la Iglesia Católica por el arrendamiento de bienes inmuebles']);
        TipoCdp::insert(['numero' => '18', 'descripcion' => 'Documento emitido por las Administradoras Privadas de Fondo de Pensiones que se encuentran bajo la supervisión de la Superintendencia de Administradoras Privadas de Fondos de Pensiones']);
        TipoCdp::insert(['numero' => '19', 'descripcion' => 'Boleto o entrada por atracciones y espectáculos públicos']);
        TipoCdp::insert(['numero' => '20', 'descripcion' => 'Comprobante de Retención']);
        TipoCdp::insert(['numero' => '21', 'descripcion' => 'Conocimiento de embarque por el servicio de transporte de carga marítima']);
        TipoCdp::insert(['numero' => '22', 'descripcion' => 'Comprobante por Operaciones No Habituales']);
        TipoCdp::insert(['numero' => '23', 'descripcion' => 'Pólizas de Adjudicación emitidas con ocasión del remate o adjudicación de bienes por venta forzada, por los martilleros o las entidades que rematen o subasten bienes por cuenta de terceros']);
        TipoCdp::insert(['numero' => '24', 'descripcion' => 'Certificado de pago de regalías emitidas por PERUPETRO S.A']);
        TipoCdp::insert(['numero' => '25', 'descripcion' => 'Documento de Atribución (Ley del Impuesto General a las Ventas e Impuesto Selectivo al Consumo, Art. 19º, último párrafo, R.S. N° 022-98-SUNAT).']);
        TipoCdp::insert(['numero' => '26', 'descripcion' => 'Recibo por el Pago de la Tarifa por Uso de Agua Superficial con fines agrarios y por el pago de la Cuota para la ejecución de una determinada obra o actividad acordada por la Asamblea General de la Comisión de Regantes o Resolución expedida por el Jefe de la Unidad de Aguas y de Riego (Decreto Supremo N° 003-90-AG, Arts. 28 y 48)']);
        TipoCdp::insert(['numero' => '27', 'descripcion' => 'Seguro Complementario de Trabajo de Riesgo']);
        TipoCdp::insert(['numero' => '28', 'descripcion' => 'Tarifa Unificada de Uso de Aeropuerto']);
        TipoCdp::insert(['numero' => '29', 'descripcion' => 'Documentos emitidos por la COFOPRI en calidad de oferta de venta de terrenos, los correspondientes a las subastas públicas y a la retribución de los servicios que presta']);
        TipoCdp::insert(['numero' => '30', 'descripcion' => 'Documentos emitidos por las empresas que desempeñan el rol adquirente en los sistemas de pago mediante tarjetas de crédito y débito']);
        TipoCdp::insert(['numero' => '31', 'descripcion' => 'Guía de Remisión - Transportista']);
        TipoCdp::insert(['numero' => '32', 'descripcion' => 'Documentos emitidos por las empresas recaudadoras de la denominada Garantía de Red Principal a la que hace referencia el numeral 7.6 del artículo 7° de la Ley N° 27133 – Ley de Promoción del Desarrollo de la Industria del Gas Natural']);
        TipoCdp::insert(['numero' => '34', 'descripcion' => 'Documento del Operador']);
        TipoCdp::insert(['numero' => '35', 'descripcion' => 'Documento del Partícipe']);
        TipoCdp::insert(['numero' => '36', 'descripcion' => 'Recibo de Distribución de Gas Natural']);
        TipoCdp::insert(['numero' => '37', 'descripcion' => 'Documentos que emitan los concesionarios del servicio de revisiones técnicas vehiculares, por la prestación de dicho servicio']);
        TipoCdp::insert(['numero' => '50', 'descripcion' => 'Declaración Única de Aduanas - Importación definitiva']);
        TipoCdp::insert(['numero' => '52', 'descripcion' => 'Despacho Simplificado - Importación Simplificada']);
        TipoCdp::insert(['numero' => '53', 'descripcion' => 'Declaración de Mensajería o Courier']);
        TipoCdp::insert(['numero' => '54', 'descripcion' => 'Liquidación de Cobranza']);
        TipoCdp::insert(['numero' => '87', 'descripcion' => 'Nota de Crédito Especial']);
        TipoCdp::insert(['numero' => '88', 'descripcion' => 'Nota de Débito Especial']);
        TipoCdp::insert(['numero' => '91', 'descripcion' => 'Comprobante de No Domiciliado']);
        TipoCdp::insert(['numero' => '96', 'descripcion' => 'Exceso de crédito fiscal por retiro de bienes']);
        TipoCdp::insert(['numero' => '97', 'descripcion' => 'Nota de Crédito - No Domiciliado']);
        TipoCdp::insert(['numero' => '98', 'descripcion' => 'Nota de Débito - No Domiciliado']);
        TipoCdp::insert(['numero' => '99', 'descripcion' => 'Otros -Consolidado de Boletas de Venta']);

    }
}
