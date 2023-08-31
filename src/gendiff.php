<?php

namespace genDiff;

use Docopt;
function genDiff()
{
$doc = <<<DOC
Generate diff

Usage:
  gendiff (-h|--help)
  gendiff (-v|--version)

Options:
  -h --help                     Show this screen
  -v --version                  Show version

DOC;


$args = Docopt::handle($doc);
}