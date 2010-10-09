<?php

/**
 * AuthorArticle form base class.
 *
 * @package    form
 * @subpackage author_article
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 8807 2008-05-06 14:12:28Z fabien $
 */
class BaseAuthorArticleForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'author_id'  => new sfWidgetFormInputHidden(),
      'article_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'author_id'  => new sfValidatorPropelChoice(array('model' => 'Author', 'column' => 'id', 'required' => false)),
      'article_id' => new sfValidatorPropelChoice(array('model' => 'Article', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('author_article[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'AuthorArticle';
  }


}
