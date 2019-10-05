<?php

namespace Hrechanyi\ActiveCampaign;

use Hrechanyi\ActiveCampaign\Classes\Lists;
use Hrechanyi\ActiveCampaign\Classes\Contacts;
use Hrechanyi\ActiveCampaign\Classes\Tags;


class ActiveCampaign
{
	private $base_url;
	private $api_key;

	public function __construct($base_url, $api_key)
	{
		$this->base_url = $base_url;
		$this->api_key = $api_key;
	}

	public function lists()
	{
		return new Lists($this->base_url, $this->api_key);
	}

	public function contacts()
	{
		return new Contacts($this->base_url, $this->api_key);
	}

	public function tags()
	{
		return new Tags($this->base_url, $this->api_key);
	}

}