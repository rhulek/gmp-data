<?php

namespace AppBundle\Controller;

use AppBundle\dto\ContactDTO;
use AppBundle\dto\DatasetDTO;
use AppBundle\dto\LanguageDTO;
use AppBundle\dto\MetaMetaDTO;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DataController extends Controller
{
    /**
     *
     * @Template
     * @param Request $request
     *
     */
    public function indexAction(Request $request)
    {
        $ret = array();

        return $ret;
    }


    /**
     *
     * @Template
     * @param Request $request
     */
    public function dataAction(Request $request, $matrix, $submatrix, $parameter) {
        $ret = array();
        $ret['matrix'] = $matrix;
        $ret['submatrix'] = $submatrix;
        $ret['parameter'] = $parameter;

        $dataset = new DatasetDTO();


        $pointOfContact = new ContactDTO();
        $pointOfContact->setEmail("hulek@recetox.muni.cz");
        $pointOfContact->setOrganisationName("RECETOX");

        $language = new LanguageDTO();
        $language->setLanguage("english");

        $metaMeta = new MetaMetaDTO();
        $metaMeta->setDate(new \DateTime());
        $metaMeta->setPointOfContacts( array($pointOfContact) );
        $metaMeta->setLanguage($language);

        $dataset->setMetaMeta( $metaMeta );


        $ret["dataset"] = $dataset;
        return $ret;
    }

}