<?php

use Illuminate\Database\Seeder;
use Bworksio\NovaQuestionable\Models\Question;
use App\Questionnaire;
use App\Plant;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->addQuestionnaires();
    }

        protected function getQuestionnaires()
        {
            return [
                'Produkt und Prozess',
            ];
        }

    protected function getQuestions()
    {
        return [
            'Ist der Wartungs-/Reinigungsplan vollständig abgezeichnet ? Leere Felder mit "/"?',
            'TPM Wartungs-/Reinigungsplan mit Bediener durchgehen und zeigen lassen; Schulungsdefizite aufzeigen',
            'Aufzeichnungen OEE (bzw. Prozesskennzahlen) prüfen (Abweichungen in Rot; Grund hinterlegt?)',
            'Ist der MA in SPA, PMA und Beanstandungsinfos eingewiesen und ist die Spalte "Wirksamkeitsprüfung"abgezeichnet?',
            'Werden die Prüfmittel ordnungsgemäß gelagert?',
            'Wurde der zur Zeit fällige Bereich lt. Reinigungsplan sauber gereinigt?',
            'Ist das Umfeld der Anlage sauber?',
            'Sind die Werkzeuge an den Schattenbrettern vorhanden, I.O.  und am richtigen Platz?(Falls nicht in Verwendung?)',
            'Werden die Ablageplätze richtig verwendet? (z.B. Spannklötze, Schlackbehälter, Reinigungswerkzeuge usw.)',
            'Sind die Reinigungswerkzeuge am richtigen Platz und in gutem und sauberem  Zustand?',
            'Befinden sich Flüssigkeitsansammlungen bzw. Austritte von Medien an der Anlage? Wenn ja, beseitigen',
            'Sind die Bereitstellungsflächen für Roh-, Fertigteile und Leergut gekennzeichnet und noch sichtbar?',
            'Produkt identifizierbar? Ist der Fertigungsstatus identifizierbar?',
            'Ist die Prozessüberwachung vom Einrichter über die letzten 3 Monate vollständig ausgefüllt worden und gibt es Abweichungen ohne Erklärung?',
        ];
    }

    protected function addQuestionnaires()
    {
        $plant = new Plant(['name' => 'Plant 1']);
        $plant->save();
        foreach ($this->getQuestionnaires() as $questionnaire) {
            $qr = new Questionnaire(['name' => $questionnaire]);
            $qr->plant_id = $plant->id;
            $qr->save();
            // $plant->questionnaires()->attach($qr);

            foreach ($this->getQuestions() as $question) {
               $q = new Question(['name' => $question]);
               $q->save();
               $qr->Questions()->attach($q);
            }
        }
    }

}
