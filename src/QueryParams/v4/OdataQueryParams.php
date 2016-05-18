<?php


namespace Bmatics\QueryParams\v4;


use Bmatics\Odata\QueryParams\OdataQueryParamsInterface;
use Illuminate\Http\Request;

class OdataQueryParams implements OdataQueryParamsInterface
{
	private $request;
	public function __construct(Request $request)
	{
		$this->request = $request;
	}

	public function getOrderBy()
	{
		return $this->request->input('$orderby');
	}

	public function getSkip()
	{
		return $this->request->input('$skip');
	}

	public function getTop()
	{
		return $this->request->input('$top');
	}

	public function getSelect()
	{
		return $this->request->input('$select');
	}

	public function getExpand()
	{
		// TODO: Implement getExpand() method.
	}

	public function getFilter()
	{
		return $this->request->input('$filter');
	}

}