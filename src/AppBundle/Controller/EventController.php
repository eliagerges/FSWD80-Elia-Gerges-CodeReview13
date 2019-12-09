<?php
namespace AppBundle\Controller;

use AppBundle\Entity\events;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class EventController extends Controller
{
   /**
    * @Route("/", name="events_list")
    */
   public function listAction()
   {
       $events = $this->getDoctrine()->getRepository('AppBundle:events')->findAll();

       return $this->render('events/index.html.twig', array('events'=>$events));
   }
       /**
    * @Route("/events/create", name="events_create")
    */
   public function createAction(Request $request)
   {
       $event = new events;

       $form = $this->createFormBuilder($event)
       ->add('name', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

       ->add('description', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

       ->add('image', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

       ->add('capacity', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

       ->add('email', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

       ->add('number', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

       ->add('address', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

       ->add('URL', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

       ->add('type', ChoiceType::class, array('choices'=>array('Music'=>'Music', 'Sport'=>'Sport', 'Movie'=>'Movie', 'Activity'=>'Activity'),'attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

   		->add('date', DateTimeType::class, array('attr' => array('style'=>'margin-bottom:15px')))

   		->add('save', SubmitType::class, array('label'=> 'Create', 'attr' => array('class'=> 'btn-primary', 'style'=>'margin-bottom:15px')))
   
       ->getForm();
       $form->handleRequest($request);


       if($form->isSubmitted() && $form->isValid()){
           $name = $form['name']->getData();
           $date = $form['date']->getData();
           $description = $form['description']->getData();
           $image = $form['image']->getData();
           $capacity = $form['capacity']->getData();
           $email = $form['email']->getData();
           $number = $form['number']->getData();
           $address = $form['address']->getData();
           $URL = $form['URL']->getData();
           $type = $form['type']->getData();


           $now = new\DateTime('now');


           $event->setName($name);
           $event->setDate($date);
           $event->setDescription($description);
           $event->setImage($image);
           $event->setCapacity($capacity);
           $event->setEmail($email);
           $event->setNumber($number);
           $event->setAddress($address);
           $event->setURL($uRL);
           $event->setType($type);
           $em = $this->getDoctrine()->getManager();
           $em->persist($event);
           $em->flush();
           $this->addFlash(
                   'notice',
                   'Event Added'
                   );
           return $this->redirectToRoute('cr13_matthias_bruckbeck_bigevents');
       }

       return $this->render('events/create.html.twig', array('form' => $form->createView()));
   }
           /**
    * @Route("/events/details/{id}", name="events_details")
    */
   public function detailsAction($id)
   {
               $event = $this->getDoctrine()->getRepository('AppBundle:events')->find($id);
       return $this->render('events/details.html.twig', array('events' => $event));
   }
  
           /**
    * @Route("/events/edit/{id}", name="events_edit")
    */
   public function editAction($id, Request $request)
   {
      $event = $this->getDoctrine()->getRepository('AppBundle:events')->find($id);
$now = new\DateTime('now');


           $event->setName($event->getName());
           $event->setDate($event->getDate());
           $event->setDescription($event->getDescription());
           $event->setImage($event->getImage());
           $event->setCapacity($event->getCapacity());
           $event->setEmail($event->getEmail());
           $event->setNumber($event->getNumber());
           $event->setAddress($event->getAddress());
           $event->setURL($event->getURL());
           $event->setType($event->getType());



       $form = $this->createFormBuilder($event)
       ->add('name', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px'))) 
       ->add('description', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

       ->add('image', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

       ->add('capacity', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

       ->add('email', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

       ->add('number', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

       ->add('address', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

       ->add('URL', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

       ->add('type', ChoiceType::class, array('choices'=>array('Music'=>'Music', 'Sport'=>'Sport', 'Movie'=>'Movie', 'Activity'=>'Activity'),'attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))

       ->add('date', DateTimeType::class, array('attr' => array('style'=>'margin-bottom:15px')))

       ->add('save', SubmitType::class, array('label'=> 'Update Event', 'attr' => array('class'=> 'btn-primary', 'style'=>'margin-botton:15px')))

       ->getForm();
       $form->handleRequest($request);
       if($form->isSubmitted() && $form->isValid()){


           $name = $form['name']->getData();
           $date = $form['date']->getData();
           $description = $form['description']->getData();
           $image = $form['image']->getData();
           $capacity = $form['capacity']->getData();
           $email = $form['email']->getData();
           $number = $form['number']->getData();
           $address = $form['address']->getData();
           $URL = $form['URL']->getData();
           $type = $form['type']->getData();
           $em = $this->getDoctrine()->getManager();
           $event = $em->getRepository('AppBundle:events')->find($id);
           $event->setName($name);
           $event->setDate($date);
           $event->setDescription($description);
           $event->setImage($image);
           $event->setCapacity($capacity);
           $event->setEmail($email);
           $event->setNumber($number);
           $event->setAddress($address);
           $event->setURL($URL);
           $event->setType($type);


           $now = new\DateTime('now');
        
           $em->flush();
           $this->addFlash(
                   'notice',
                   'Event Updated'
                   );
           return $this->redirectToRoute('cr13_matthias_bruckbeck_bigevents');
       }
       return $this->render('events/edit.html.twig', array('event' => $event, 'form' => $form->createView()));
   }

   /**
    * @Route("/events/delete/{id}", name="events_delete")
    */
   public function deleteAction($id){
                $em = $this->getDoctrine()->getManager();
           $event = $em->getRepository('AppBundle:events')->find($id);
           $em->remove($event);
            $em->flush();
           $this->addFlash(
                   'notice',
                   'Event Removed'
                   );
            return $this->redirectToRoute('events_list');
   }
}