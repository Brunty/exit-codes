<?php

namespace Brunty\ExitCodes;

class Bash {
	/*
	 * Error codes with special meanings:
	 * 1 - 2, 126 - 165, and 255
	 */
	const COMMAND_SUCCESSFUL = 0;
	const GENERAL_ERROR = 1;
	const MISUSE_BUILTINS = 2;

	const COMMAND_NOT_EXECUTABLE = 126;
	const COMMAND_NOT_FOUND = 127;
	/*
	 * 128+n Fatal Error Signal "n"
	 */
	const INVALID_ARGUMENT = 128;

	/*
	 * Control-C is fatal error signal 2, therefore: 130 = 128 + 2
	 */
	const SCRIPT_TERMINATED_CTRL_C = 130;

	/*
	 * 255* Exit status out of range.
	 * Only integers in the range of 0-255 are accepted
	 */
}