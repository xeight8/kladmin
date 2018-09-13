<?php

namespace Xeight8\Kladmin\Http\GraphQL;

use Xeight8\Kladmin\Models\PagebuilderPage;

class Query
{
	public function pages($root, array $args, $context, $info)
	{
		return PagebuilderPage::all();
	}

	public function page($root, array $args, $context, $info)
	{
		return PagebuilderPage::where('slug', $args['slug'])->first();
	}
}