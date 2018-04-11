<?
namespace Step\Acceptance;

class CRMUserSteps extends \AcceptanceTester 
{
	function amInQueryCustomerUI()
	{
		$I->$this;
		$I->amOnPage('customers/query');
	}
	function fillInPhoneFieldWithDataFrom($customer_data)
	{
		$I->$this;
		$I->fillField(
			'PhoneRecord[number]',
			$customer_data['PhoneRecord[number]']
			);
	}
	function clickSearhButton()
	{
		$I->$this;
		$I->click('Search');
	}
	function seeIAmInListCustomersUi( )
	{
	$I = $this;
	$I->seeCurrentUrlMatches ('/customers/');
	}
	function seeCustomerInList($customer_data)
	{
		$I->$this;
		$I->see($customer_data['CustomerRecord[name]'],'#search_result');
	}
	function dontSeeCustomerInList($customer_data)
	{
		$I->$this;
		$I->dontSee($customer_data['CustomerRecord[name]'],'#search_result');
	} 
}