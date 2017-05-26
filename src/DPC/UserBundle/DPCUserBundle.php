<?php

namespace DPC\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class DPCUserBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
