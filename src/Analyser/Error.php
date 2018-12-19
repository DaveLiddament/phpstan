<?php declare(strict_types = 1);

namespace PHPStan\Analyser;

use PHPStan\Rules\Rule;

class Error
{

	/** @var string */
	private $message;

	/** @var string */
	private $file;

	/** @var int|NULL */
	private $line;

	/** @var bool */
	private $canBeIgnored;

	/** @var Rule|null */
	private $rule;

	public function __construct(string $message, string $file, ?int $line = null, bool $canBeIgnored = true, ?Rule $rule = null)
	{
		$this->message = $message;
		$this->file = $file;
		$this->line = $line;
		$this->canBeIgnored = $canBeIgnored;
		$this->rule = $rule;
	}

	public function getMessage(): string
	{
		return $this->message;
	}

	public function getFile(): string
	{
		return $this->file;
	}

	public function getLine(): ?int
	{
		return $this->line;
	}

	public function canBeIgnored(): bool
	{
		return $this->canBeIgnored;
	}

	public function getRule(): ?Rule
	{
		return $this->rule;
	}

}
