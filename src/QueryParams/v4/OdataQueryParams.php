<?php


namespace Bmatics\Odata\QueryParams\v4;


use Bmatics\Odata\QueryParams\OdataQueryParamsInterface;
use Illuminate\Http\Request;

class OdataQueryParams implements OdataQueryParamsInterface
{
	private $request;
	public function __construct(Request $request)
	{
		$this->request = $request;
	}

	/**
	 * @return array|string
	 */
	public function getOrderBy()
	{
		return $this->request->input('$orderby');
	}

	/**
	 * @return array|string
	 */
	public function getSkip()
	{
		return $this->request->input('$skip');
	}

	/**
	 * @return array|string
	 */
	public function getTop()
	{
		return $this->request->input('$top');
	}

	/**
	 * This is currently not fully supported for ODATA v4.
	 *
	 * TODO: Fix this method to work with v4 syntax. The below examples do not parse correctly.
	 *
	 * Example: $select=DemoService.*
	 *
	 * @return array|string
	 */
	public function getSelect()
	{
		return $this->request->input('$select');
	}

	/**
	 * This is currently not fully supported for ODATA v4.
	 *
	 * TODO: Fix this method to work with v4 syntax. The below examples do not parse correctly.
	 *
	 * Example: $expand=Orders($filter=Amount gt 100)
	 * Example: $expand=SampleModel.VipCustomer/InHouseStaff
	 *
	 * @return array|string
	 */
	public function getExpand()
	{
		return $this->request->input('$expand');
	}

	/**
	 * This is currently not fully supported for ODATA v4.
	 *
	 * TODO: Fix this method to work with v4 syntax. The below examples do not parse correctly.
	 *
	 * Example: $filter=Style has Sales.Color'Yellow'
	 * Example: $filter=(Price sub 5) gt 10
	 *
	 * @return array|string
	 */
	public function getFilter()
	{
		return $this->request->input('$filter');
	}

}