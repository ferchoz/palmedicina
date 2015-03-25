<?php
namespace AppBundle\Command;

use OldBundle\Entity\iCTADAT;
use OldBundle\Entity\iCTADET;
use OldBundle\Entity\iESTUDIOS;
use OldBundle\Entity\iNOVEDADES;
use OldBundle\Entity\iPRESTAWEB;
use OldBundle\Entity\iUSUARIOS;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Finder\Finder;
use AppBundle\Command\Constants\iNOVEDADES as nov;
use AppBundle\Command\Constants\iCTADAT as dat;
use AppBundle\Command\Constants\iCTADET as det;
use AppBundle\Command\Constants\iESTUDIOS as est;
use AppBundle\Command\Constants\iPRESTAWEB as web;
use AppBundle\Command\Constants\iUSUARIOS as usr;

class ImportDataBaseCommand extends ContainerAwareCommand
{
    private $entityManager;

    protected function configure()
    {
        $this
            ->setName('import:database')
            ->setDescription('Importa datos de los archivos y los almacena en la base de datos')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->entityManager = $this->getContainer()->get('doctrine')->getManager('old');

        $this->importFile($output, 'iNOVEDADES');
        $this->importFile($output, 'iCTADAT');
        $this->importFile($output, 'iCTADET');
        $this->importFile($output, 'iESTUDIOS');
        $this->importFile($output, 'iPRESTAWEB');
        $this->importFile($output, 'iUSUARIOS');
        $this->importFile($output, 'iNOVEDADES', true);
        $this->importFile($output, 'iCTADAT', true);
        $this->importFile($output, 'iCTADET', true);
        $this->importFile($output, 'iESTUDIOS', true);
        $this->importFile($output, 'iPRESTAWEB', true);
        $this->importFile($output, 'iUSUARIOS', true);
    }

    public function importFile(OutputInterface $output, $name, $truncate = false)
    {
        $em         = $this->entityManager;
        $batchSize  = 500;
        $success    = 0;
        $errors     = 0;
        $rootDir    = $this->getContainer()->get('kernel')->getRootDir();
        $action     = $truncate ? 'RECARGAR' : 'AGREGAR';
        $filePath   = $rootDir.'/../DATABASE_FILES/'.$action.'/';
        $fileName   = $name.'.txt';
        $fullPath   = $filePath.$fileName;
        $errorFile  = $filePath.$name.'_ERROR_'.date("Ymd_H-i-s").'.txt';
        $progress   = $this->getHelper('progress');
        $progress->setRedrawFrequency(100);

        if (file_exists($fullPath)){
            if (($handle = fopen($fullPath, "r")) !== FALSE) {
                if ($truncate) {
                    $output->writeln('Borrando tabla: '.$name);
                    $connection = $em->getConnection();
                    $query      = 'TRUNCATE ' . $name . ';';
                    $connection->executeQuery($query, array(), array());
                }

                $i = 0;
                $countLinesInFile = $this->getCountLines($fullPath);

                $output->writeln('Importando a tabla: '.$name);
                $progress->start($output, $countLinesInFile);
                while (($data = fgetcsv($handle, null, ";")) !== FALSE) {
                    $progress->advance();
                    $i++;
                    $functionRows = 'getRows'.$name;
                    if (count($data) < $this->$functionRows()) {
                        $errors++;
                        file_put_contents($errorFile, implode(';',$data)."\n", FILE_APPEND | LOCK_EX);
                        continue;
                    }

                    $data = $this->proccessFields($data);

                    $function = 'getObject'.$name;

                    $object = $this->$function($data);

                    $em->persist($object);
                    $success++;

                    if (($i % $batchSize) === 0) {
                        $em->flush();
                        $em->clear(); // Detaches all objects from Doctrine!
                    }
                }
                $em->flush(); //Persist objects that did not make up an entire batch
                $em->clear();
                $progress->finish();
                fclose($handle);
                $finishMessage = '<info>Correctos:</info> ' . $success;
                $finishMessage .= $errors ? ' - <error>Erroneos:</error>  ' . $errors : '';
                $output->writeln($finishMessage);
//                unlink($fullPath);
            }
        } else {
            $output->writeln('No hay '.$name.' para '.$action);
        }
    }

    private function getCountLines($fullPath)
    {
        $escape = escapeshellarg($fullPath);
        $exec   = exec('wc -l ' . $escape);
        $explod = explode(" ", $exec);

        return array_shift($explod);
    }

    private function proccessFields($data)
    {
        foreach ($data as &$field) {
            $field = utf8_encode(trim($field));
        }
        return $data;
    }

    private function getObjectiNOVEDADES($data)
    {
        $fecha = \DateTime::createFromFormat('Y-m-d H:i:s', $data[nov::fecha]);

        $novedades = new iNOVEDADES();
        $novedades->setFecha($fecha);
        $novedades->setCodigoe($data[nov::codigoe]);
        $novedades->setRazon($data[nov::razon]);
        $novedades->setCodart($data[nov::codart]);
        $novedades->setNombart($data[nov::nombart]);
        $novedades->setCodigop($data[nov::codigop]);
        $novedades->setNombre($data[nov::nombre]);
        $novedades->setTiponov($data[nov::tiponov]);
        $novedades->setRen1($data[nov::ren1]);
        $novedades->setRen2($data[nov::ren2]);
        $novedades->setRen3($data[nov::ren3]);
        $novedades->setRen4($data[nov::ren4]);
        $novedades->setRen5($data[nov::ren5]);
        $novedades->setRen6($data[nov::ren6]);
        $novedades->setRen7($data[nov::ren7]);
        $novedades->setRen8($data[nov::ren8]);
        $novedades->setRen9($data[nov::ren9]);
        $novedades->setRen10($data[nov::ren10]);
        $novedades->setEnlace($data[nov::enlace]);
        $novedades->setOperador($data[nov::operador]);

        return $novedades;
    }

    private function getRowsiNOVEDADES()
    {
        return 20;
    }

    private function getObjectiCTADAT($data)
    {
        $fecha = \DateTime::createFromFormat('Y-m-d H:i:s', $data[dat::fecha]);
        $venci = \DateTime::createFromFormat('Y-m-d H:i:s', $data[dat::vencimiento]);

        $object = new iCTADAT();
        $object->setSucursal($data[dat::sucursal]);
        $object->setNumero($data[dat::numero]);
        $object->setOrden($data[dat::orden]);
        $object->setLetra($data[dat::letra]);
        $object->setFecha($fecha);
        $object->setTipocomp($data[dat::tipocomp]);
        $object->setCodigoe($data[dat::codigoe]);
        $object->setRazon($data[dat::razon]);
        $object->setDomicilio($data[dat::domicilio]);
        $object->setLocalidad($data[dat::localidad]);
        $object->setCpostal($data[dat::cpostal]);
        $object->setNrocuit($data[dat::nrocuit]);
        $object->setLeyeiva($data[dat::leyeiva]);
        $object->setCondiciones($data[dat::condiciones]);
        $object->setVencimiento($venci);
        $object->setGravado($data[dat::gravado]);
        $object->setNogravado($data[dat::nogravado]);
        $object->setSubtotal($data[dat::subtotal]);
        $object->setIva1($data[dat::iva1]);
        $object->setTotal($data[dat::total]);
        $object->setSaldo($data[dat::saldo]);
        $object->setPorceper($data[dat::porceper]);
        $object->setImpoper($data[dat::impoper]);

        return $object;
    }

    private function getRowsiCTADAT()
    {
        return 23;
    }

    private function getObjectiCTADET($data)
    {
        $object = new iCTADET();
        $object->setSucursal($data[det::sucursal]);
        $object->setNumero($data[det::numero]);
        $object->setOrden($data[det::orden]);
        $object->setCantidad($data[det::cantidad]);
        $object->setCodigo($data[det::codigo]);
        $object->setDescripcion($data[det::descripcion]);
        $object->setPrecio($data[det::precio]);
        $object->setTotal($data[det::total]);

        return $object;
    }

    private function getRowsiCTADET()
    {
        return 8;
    }

    private function getObjectiESTUDIOS($data)
    {
        $object = new iESTUDIOS();
        $object->setFecha($data[est::fecha]);
        $object->setCodigo($data[est::codigo]);
        $object->setEmpresa($data[est::empresa]);
        $object->setDireccion($data[est::direccion]);
        $object->setLocalidad($data[est::localidad]);
        $object->setTelefono($data[est::telefono]);
        $object->setCodigop($data[est::codigop]);
        $object->setPaciente($data[est::paciente]);
        $object->setDocumento($data[est::documento]);
        $object->setExamen($data[est::examen]);

        $object->setR1est($data[est::R1est]);
        $object->setR2est($data[est::R2est]);
        $object->setR3est($data[est::R3est]);
        $object->setR4est($data[est::R4est]);
        $object->setR5est($data[est::R5est]);
        $object->setR6est($data[est::R6est]);
        $object->setR7est($data[est::R7est]);
        $object->setR8est($data[est::R8est]);
        $object->setR9est($data[est::R9est]);
        $object->setR10est($data[est::R10est]);

        $object->setR1res($data[est::R1res]);
        $object->setR2res($data[est::R2res]);
        $object->setR3res($data[est::R3res]);
        $object->setR4res($data[est::R4res]);
        $object->setR5res($data[est::R5res]);
        $object->setR6res($data[est::R6res]);
        $object->setR7res($data[est::R7res]);
        $object->setR8res($data[est::R8res]);
        $object->setR9res($data[est::R9res]);
        $object->setR10res($data[est::R10res]);

        return $object;
    }

    private function getRowsiESTUDIOS()
    {
        return 31;
    }

    private function getObjectiPRESTAWEB($data)
    {
        $fecha = \DateTime::createFromFormat('Y-m-d H:i:s', $data[web::fecha]);

        $object = new iPRESTAWEB();
        $object->setRegistro($data[web::registro]);
        $object->setNumero($data[web::numero]);
        $object->setFecha($fecha);
        $object->setCodigoe($data[web::codigoe]);
        $object->setCodigop($data[web::codigop]);
        $object->setNombre($data[web::nombre]);
        $object->setCodpre($data[web::codpre]);
        $object->setEstudio($data[web::estudio]);
        $object->setCantidad($data[web::cantidad]);
        $object->setPrecio($data[web::precio]);

        return $object;
    }

    private function getRowsiPRESTAWEB()
    {
        return 10;
    }

    private function getObjectiUSUARIOS($data)
    {
        $object = new iUSUARIOS();
        $object->setCodigopal($data[usr::codigopal]);
        $object->setNombrepal($data[usr::nombrepal]);
        $object->setClave($data[usr::clave]);
        $object->setUsuario($data[usr::usuario]);
        $object->setActivo($data[usr::activo]);
        $object->setCorreo($data[usr::correo]);
        $object->setDomicilio($data[usr::domicilio]);
        $object->setLocalidad($data[usr::localidad]);
        $object->setTelefono($data[usr::telefono]);
        $object->setContacto($data[usr::contacto]);
        $object->setActividad($data[usr::actividad]);
        $object->setCorreop($data[usr::correop]);
        $object->setNombreart($data[usr::nombreart]);

        return $object;
    }

    private function getRowsiUSUARIOS()
    {
        return 13;
    }
}
