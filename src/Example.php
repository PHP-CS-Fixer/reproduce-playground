<?php

namespace PhpCsFixer\ReproducePlayground;

use App\Entity\Processus\Champ\Champ;
use App\Entity\Processus\Processus;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class InformationsEtapeDto
{
    public function __construct(
        /** Nécessaire pour le formulaire */
        public Processus $processus,
        #[NotBlank]
        #[Length(max: 100)]
        public string $libelle {
            set(?string $value) {
                $this->libelle = $value ?? "";
            }
        },
        /**
         * @var iterable<Champ<mixed>>
         */
        public iterable $champsAffiches = [],
        public bool $archivable = false,
        public bool $commentable = false,
    ) {}
}