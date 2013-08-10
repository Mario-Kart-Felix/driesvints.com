<?php namespace Content;

use Kurenai\DocumentParser;

class MarkdownContentRepository extends BaseContentRepository implements ContentRepositoryInterface {

	/**
	 * The filepath for this Markdown file.
	 *
	 * @var string
	 */
	protected $filepath;

	/**
	 * The Kurenai Markdown parser.
	 *
	 * @var \Kurenai\DocumentParser
	 */
	protected $parser;

	/**
	 * The Markdown Document.
	 *
	 * @var \Kurenai\Document
	 */
	protected $document;

	/**
	 * The date attribute key.
	 *
	 * @var string
	 */
	protected $dateKey = 'date';

	/**
	 * Initialize the repository.
	 *
	 * @param  string  $filepath
	 * @param  \Kurenai\DocumentParser  $parser
	 * @return void
	 */
	public function __construct($filepath, DocumentParser $parser)
	{
		$this->parser = $parser;
		$this->filepath = $filepath;
		$this->document = $this->parse($filepath);
	}

	/**
	 * Parse a markdown document.
	 *
	 * @param  string  $filepath
	 * @return \Kurenai\Document
	 */
	protected function parse($filepath)
	{
		$file = file_get_contents($filepath);

		return $this->parser->parse($file);
	}

	/**
	 * Returns the content item body.
	 *
	 * @return string
	 */
	public function body()
	{
		return $this->document->getHtmlContent();
	}

	/**
	 * Returns the content item's tags.
	 *
	 * @return array
	 */
	public function tags()
	{
		return explode(', ', $this->getAttribute('tags'));
	}

	/**
	 * Determines if comments should be disabled or not.
	 *
	 * @return bool
	 */
	public function disable_comments()
	{
		return ($this->getAttribute('disable_comments') === 'true');
	}

	/**
	 * Returns a specific content item attribute.
	 *
	 * @param  string  $key
	 * @return mixed
	 */
	public function getAttribute($key)
	{
		return $this->document->get($key);
	}

	/**
	 * Sets a new value to a specific content item attribute.
	 *
	 * @param  string  $key
	 * @param  mixed   $value
	 * @return mixed
	 */
	public function setAttribute($key, $value)
	{
		$this->document->add($key, $value);
	}

	/**
	 * Returns the Kurenai Parser.
	 *
	 * @return \Kurenai\Parser
	 */
	public function getParser()
	{
		return $this->parser;
	}

	/**
	 * Returns the Kurenai Document.
	 *
	 * @return \Kurenai\Document
	 */
	public function getDocument()
	{
		return $this->document;
	}

}