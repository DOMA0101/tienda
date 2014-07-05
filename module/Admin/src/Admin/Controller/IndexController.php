<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Admin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Admin\Entity\Rol;
use Admin\Entity\Usuario;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        // siempre Va para la base de datos
        $objectManager = $this
                ->getServiceLocator()
                ->get('Doctrine\ORM\EntityManager');
        
        /*
        //  isertar datos al rol
        $rol = new Rol();
        $rol ->setNombre('ADMIN');
        //  graba en la memoria
        $objectManager->persist($rol);
        //  para gravar em la base de datos
        $objectManager->flush();
        // para q terminar la transaccion
        echo $rol->getIdrol();
        
        echo $rol->getNombre();
        
         */

        
        
/*        
        ///// BUSCAR Y MODIFICAR
        //
        //buscar por identificador
        $rol=$objectManager->find('Admin\Entity\Rol', 7);
        //modificar un Campo
        $rol->setNombre('D_O_M_A');
        $objectManager->flush();
        // var_dump($rol->getNombre());
        echo $rol->getId();
        echo '-'.$rol->getNombre();
                
        
*/
        /*
        ///// ELIMINAR
        ///
        // de donde queremos eliminar mediante un id
        $rol = $objectManager->find('Admin\Entity\Rol', 6);
        $objectManager->remove($rol);
        $objectManager->flush();
        echo '-'.$rol->getNombre().' fue eliminado de la Base de datos';
        ¨*/
        
        /*
        
        ///// LISTAR TODOS LOS DATOS
        $claseRol = $objectManager->getRepository('Admin\Entity\Rol');
        $rol = $claseRol->findAll(); //recupera todos los archivos
        print_r($rol);
        
        */
        
        
        /////  GUARDAR EN UNA SOCIACION DE CLASES DE MUCHOS A UNO
        //CREAR UN USUARIO
        $usuario=new Usuario();
        $usuario->setNombrecomplet('David Mamani');
        $usuario->setUser('orlando');
        $usuario->setPassword('123456');
        $usuario->setEstado('activo');
        $objectManager->persist($usuario);
        
        /// obtener objeto rol asociar
        $rol = $objectManager->find('Admin\Entity\Rol', 1);
        $usuario->setRolrol($rol);//  Asigna el objeto asociado
        $objectManager->flush();
        echo $usuario->getnombreComplet().'fue guardao correctamente';
                
        return new ViewModel();
    }
}