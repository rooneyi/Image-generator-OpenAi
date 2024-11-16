<?php

namespace App\Controller;

use App\Form\YoutubeType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use App\service\OpenAiService; // Assurez-vous que le namespace est correctement défini

class HomeController extends AbstractController
{
    public function __construct(
        private readonly OpenAiService $openAiService // Vérifiez également le nom du service OpenAiService
    )
    {
    }

    #[Route('/', name: 'app_home')]
    public function index(Request $request): Response
    {
        $form = $this->createForm(YoutubeType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $description  = $form->get('description')->getData();
            $image = $this->openAiService->getOpenAiImage($description);

        //     return $this->render('home/_image.html.twig', [
        //             'image' => $image['url'],  // Vérifiez que 'url' existe bien dans la réponse
        //             'prompt' => $image['revised_prompt']  // Si 'revised_prompt' est null, retournez la description initiale
        //         ]);
            
                dd($image);
        }
        // ]);
        return $this->render('home/index.html.twig', [
                'form' => $form,
        ]);
    
}
}