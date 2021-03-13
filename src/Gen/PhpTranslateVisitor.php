<?php

/*
 * The MIT License
 *
 * Copyright 2020 guedel.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace Guedel\Algo\Gen;

use Guedel\Algo\Base\Context as Context;
use guedel\Stream\CodeWriter;

/**
 * Translate an alorgithm into Php Language
 *
 * @author guedel
 */
class PhpTranslateVisitor extends \Guedel\Algo\Base\AlgoBaseVisitor
{
  private $context;
  private CodeWrite $writer;


  public function __construct(bool $useStrict = false)
  {
    $this->writer = new CodeWriter();
  }
  
	public function visitAlgorithme(Context\AlgorithmeContext $context)
    {
      $this->writer->outln('namespace ' + $this->context->ID());
      $context->Accept($this);
      return $this->writer->render();
    }
    
    public function visitBloc(Context\BlocContext $context)
    {
      $this->writer
          ->outln("{")
          ->indent();
      $context->accept($this);
      $this->writer->unindent()->outln(']');
    }

    public function visitContexte_fonction(\Guedel\Algo\Base\Context\Contexte_fonctionContext $context)
    {
      $this->writer
          ->out("function " . $context->ID() . "(");
      $this->writer
          ->outln(")")
          ->outln("{")
          ->indent()
      ;
      $context->accept($this);
      $this->writer
          ->unindent()
          ->outln("}")
      ;
    }
}
