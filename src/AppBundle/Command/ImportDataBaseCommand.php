<?php
namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Finder\Finder;

class ImportDataBaseCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('import:database')
            ->setDescription('Importa datos de los archivos y los almacena en la base de datos')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('importando---');
        $this->importNovedades();
    }

    public function importNovedades()
    {
        $finder = new Finder();
        $finder->files()->in($this->getContainer()->get('kernel')->getRootDir() . '/../DATABASE_FILES/RECARGAR/iNOVEDADES/');
        $ignoreFirstLine = true;

        foreach ($finder as $file) {
            // Print the absolute path
//            print $file->getRealpath()."\n";

            // Print the relative path to the file, omitting the filename
//            print $file->getRelativePath()."\n";

            // Print the relative path to the file
//            print $file->getRelativePathname()."\n";

            $rows = array();
            if (($handle = fopen($file->getRealPath(), "r")) !== FALSE) {
                $i = 0;
                while (($data = fgetcsv($handle, null, ";")) !== FALSE) {
                    $i++;
                    if ($ignoreFirstLine && $i == 1) { continue; }
                    $rows[] = $data;
                    var_dump($rows);
                }
                fclose($handle);
            }
        }

    }
}
