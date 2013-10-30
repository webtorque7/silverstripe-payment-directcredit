<?php
/**
 * Created by JetBrains PhpStorm.
 * User: User
 * Date: 31/10/13
 * Time: 9:29 AM
 * To change this template use File | Settings | File Templates.
 */

class DirectCreditSiteConfig extends DataExtension
{
        private static $db = array(
                'DirectCreditText' => 'HTMLText'
        );

        public function updateCMSFields(FieldList $fields) {
                $fields->addFieldToTab('Root.Payments.DirectCredit', HtmlEditorField::create('DirectCreditText', 'Direct Credit Text')
                        ->setDescription('Instructions for customer on how to pay (bank account etc)')
                );
        }
}