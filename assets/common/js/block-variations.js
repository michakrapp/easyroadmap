wp.blocks.registerBlockVariation(
	'core/paragraph',
	{
		name: 'p-var-upvote',
		title: 'Upvotes',
		attributes: {
			"metadata": {
                "bindings":{
                    "content":{
                        "source":"core/post-meta",
                        "args":{
                            "key":"upvote"
                        }
                    }
                }
            }
		}
	}
);

wp.blocks.registerBlockVariation(
	'core/paragraph',
	{
		name: 'p-var-downvote',
		title: 'Downvotes',
		attributes: {
			"metadata": {
                "bindings":{
                    "content":{
                        "source":"core/post-meta",
                        "args":{
                            "key":"downvote"
                        }
                    }
                }
            }
		}
	}
);
