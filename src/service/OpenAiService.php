<?php

namespace App\service;

use OpenAI\Client; // Ensure that the Client class OpenAiService in this namespace or correct the namespace if needed

class OpenAiService
{
  public function __construct(
    private readonly Client $openAiClient
  ) {
  }
  public function getOpenAiImage(string $description): ?string
  {
    $basePrompt ="Créez un paysage magnifique et serein d'une chaîne de montagnes
     en automne. Les montagnes doivent être couvertes de feuillage d'automne, 
     avec des teintes rouges, oranges et jaunes. Au premier plan, un lac calme 
     reflète les montagnes et les arbres, avec une petite cabane en bois près 
     de la rive. Le ciel doit être clair, avec le soleil se couchant derrière 
     les montagnes, diffusant une lumière dorée sur la scène. L'ambiance générale 
     doit être paisible et tranquille, idéale pour la relaxation."
  ;
      
          $response = $this->openAiClient->images()->create([
              'model' => 'dall-e-3',
              'prompt' => $basePrompt .' '.$description,
              'n' => 1,
              'size' => '1792x1024',
              'response_format' => 'url'
          ]);
  
          // Vérifier que 'data' existe et n'est pas null avant d'y accéder
          return $this->$response->toArray()['data'][0];
      }
    }
    


