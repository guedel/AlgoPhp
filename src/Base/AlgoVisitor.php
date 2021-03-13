<?php

/*
 * Generated from src/Algo.g4 by ANTLR 4.9.2
 */

namespace Guedel\Algo\Base;

use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;

/**
 * This interface defines a complete generic visitor for a parse tree produced by {@see AlgoParser}.
 */
interface AlgoVisitor extends ParseTreeVisitor
{
	/**
	 * Visit a parse tree produced by {@see AlgoParser::algorithme()}.
	 *
	 * @param Context\AlgorithmeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAlgorithme(Context\AlgorithmeContext $context);

	/**
	 * Visit a parse tree produced by {@see AlgoParser::contexte_algorithme()}.
	 *
	 * @param Context\Contexte_algorithmeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitContexte_algorithme(Context\Contexte_algorithmeContext $context);

	/**
	 * Visit a parse tree produced by {@see AlgoParser::bloc()}.
	 *
	 * @param Context\BlocContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBloc(Context\BlocContext $context);

	/**
	 * Visit a parse tree produced by {@see AlgoParser::partie_declaration()}.
	 *
	 * @param Context\Partie_declarationContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPartie_declaration(Context\Partie_declarationContext $context);

	/**
	 * Visit a parse tree produced by {@see AlgoParser::contexte_fonction()}.
	 *
	 * @param Context\Contexte_fonctionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitContexte_fonction(Context\Contexte_fonctionContext $context);

	/**
	 * Visit a parse tree produced by {@see AlgoParser::contexte_procedure()}.
	 *
	 * @param Context\Contexte_procedureContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitContexte_procedure(Context\Contexte_procedureContext $context);

	/**
	 * Visit a parse tree produced by {@see AlgoParser::contexte_type()}.
	 *
	 * @param Context\Contexte_typeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitContexte_type(Context\Contexte_typeContext $context);

	/**
	 * Visit a parse tree produced by {@see AlgoParser::contexte_variable()}.
	 *
	 * @param Context\Contexte_variableContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitContexte_variable(Context\Contexte_variableContext $context);

	/**
	 * Visit a parse tree produced by {@see AlgoParser::contexte_constante()}.
	 *
	 * @param Context\Contexte_constanteContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitContexte_constante(Context\Contexte_constanteContext $context);

	/**
	 * Visit a parse tree produced by {@see AlgoParser::declaration_variable()}.
	 *
	 * @param Context\Declaration_variableContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDeclaration_variable(Context\Declaration_variableContext $context);

	/**
	 * Visit a parse tree produced by {@see AlgoParser::declaration_typedef()}.
	 *
	 * @param Context\Declaration_typedefContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDeclaration_typedef(Context\Declaration_typedefContext $context);

	/**
	 * Visit a parse tree produced by {@see AlgoParser::declaration_constante()}.
	 *
	 * @param Context\Declaration_constanteContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDeclaration_constante(Context\Declaration_constanteContext $context);

	/**
	 * Visit a parse tree produced by {@see AlgoParser::liste_parametres_formels()}.
	 *
	 * @param Context\Liste_parametres_formelsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitListe_parametres_formels(Context\Liste_parametres_formelsContext $context);

	/**
	 * Visit a parse tree produced by {@see AlgoParser::introduction_type()}.
	 *
	 * @param Context\Introduction_typeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIntroduction_type(Context\Introduction_typeContext $context);

	/**
	 * Visit a parse tree produced by {@see AlgoParser::type_donnee()}.
	 *
	 * @param Context\Type_donneeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitType_donnee(Context\Type_donneeContext $context);

	/**
	 * Visit a parse tree produced by {@see AlgoParser::type_simple()}.
	 *
	 * @param Context\Type_simpleContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitType_simple(Context\Type_simpleContext $context);

	/**
	 * Visit a parse tree produced by {@see AlgoParser::type_complexe()}.
	 *
	 * @param Context\Type_complexeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitType_complexe(Context\Type_complexeContext $context);

	/**
	 * Visit a parse tree produced by {@see AlgoParser::reference()}.
	 *
	 * @param Context\ReferenceContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitReference(Context\ReferenceContext $context);

	/**
	 * Visit a parse tree produced by {@see AlgoParser::definition_tableau()}.
	 *
	 * @param Context\Definition_tableauContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDefinition_tableau(Context\Definition_tableauContext $context);

	/**
	 * Visit a parse tree produced by {@see AlgoParser::definition_structure()}.
	 *
	 * @param Context\Definition_structureContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDefinition_structure(Context\Definition_structureContext $context);

	/**
	 * Visit a parse tree produced by {@see AlgoParser::liste_champs_structures()}.
	 *
	 * @param Context\Liste_champs_structuresContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitListe_champs_structures(Context\Liste_champs_structuresContext $context);

	/**
	 * Visit a parse tree produced by {@see AlgoParser::definition_classe()}.
	 *
	 * @param Context\Definition_classeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDefinition_classe(Context\Definition_classeContext $context);

	/**
	 * Visit a parse tree produced by {@see AlgoParser::dimension_tableau()}.
	 *
	 * @param Context\Dimension_tableauContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDimension_tableau(Context\Dimension_tableauContext $context);

	/**
	 * Visit a parse tree produced by {@see AlgoParser::sepInstr()}.
	 *
	 * @param Context\SepInstrContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSepInstr(Context\SepInstrContext $context);

	/**
	 * Visit a parse tree produced by {@see AlgoParser::instruction()}.
	 *
	 * @param Context\InstructionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitInstruction(Context\InstructionContext $context);

	/**
	 * Visit a parse tree produced by {@see AlgoParser::liste_instructions()}.
	 *
	 * @param Context\Liste_instructionsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitListe_instructions(Context\Liste_instructionsContext $context);

	/**
	 * Visit a parse tree produced by {@see AlgoParser::bloc_instructions()}.
	 *
	 * @param Context\Bloc_instructionsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBloc_instructions(Context\Bloc_instructionsContext $context);

	/**
	 * Visit a parse tree produced by {@see AlgoParser::assigne()}.
	 *
	 * @param Context\AssigneContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAssigne(Context\AssigneContext $context);

	/**
	 * Visit a parse tree produced by {@see AlgoParser::si_alors()}.
	 *
	 * @param Context\Si_alorsContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSi_alors(Context\Si_alorsContext $context);

	/**
	 * Visit a parse tree produced by {@see AlgoParser::boucle_tantque()}.
	 *
	 * @param Context\Boucle_tantqueContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBoucle_tantque(Context\Boucle_tantqueContext $context);

	/**
	 * Visit a parse tree produced by {@see AlgoParser::boucle_pour()}.
	 *
	 * @param Context\Boucle_pourContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitBoucle_pour(Context\Boucle_pourContext $context);

	/**
	 * Visit a parse tree produced by {@see AlgoParser::retourne()}.
	 *
	 * @param Context\RetourneContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRetourne(Context\RetourneContext $context);

	/**
	 * Visit a parse tree produced by {@see AlgoParser::inclusion_fichier()}.
	 *
	 * @param Context\Inclusion_fichierContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitInclusion_fichier(Context\Inclusion_fichierContext $context);

	/**
	 * Visit a parse tree produced by {@see AlgoParser::appel_procedure()}.
	 *
	 * @param Context\Appel_procedureContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAppel_procedure(Context\Appel_procedureContext $context);

	/**
	 * Visit a parse tree produced by {@see AlgoParser::parametres()}.
	 *
	 * @param Context\ParametresContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitParametres(Context\ParametresContext $context);

	/**
	 * Visit a parse tree produced by {@see AlgoParser::access_ID()}.
	 *
	 * @param Context\Access_IDContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAccess_ID(Context\Access_IDContext $context);

	/**
	 * Visit a parse tree produced by the `somme` labeled alternative
	 * in {@see AlgoParser::expression()}.
	 *
	 * @param Context\SommeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitSomme(Context\SommeContext $context);

	/**
	 * Visit a parse tree produced by the `negation` labeled alternative
	 * in {@see AlgoParser::expression()}.
	 *
	 * @param Context\NegationContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNegation(Context\NegationContext $context);

	/**
	 * Visit a parse tree produced by the `caractere` labeled alternative
	 * in {@see AlgoParser::expression()}.
	 *
	 * @param Context\CaractereContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCaractere(Context\CaractereContext $context);

	/**
	 * Visit a parse tree produced by the `produit` labeled alternative
	 * in {@see AlgoParser::expression()}.
	 *
	 * @param Context\ProduitContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitProduit(Context\ProduitContext $context);

	/**
	 * Visit a parse tree produced by the `texte` labeled alternative
	 * in {@see AlgoParser::expression()}.
	 *
	 * @param Context\TexteContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTexte(Context\TexteContext $context);

	/**
	 * Visit a parse tree produced by the `logique_ou` labeled alternative
	 * in {@see AlgoParser::expression()}.
	 *
	 * @param Context\Logique_ouContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLogique_ou(Context\Logique_ouContext $context);

	/**
	 * Visit a parse tree produced by the `nombre` labeled alternative
	 * in {@see AlgoParser::expression()}.
	 *
	 * @param Context\NombreContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNombre(Context\NombreContext $context);

	/**
	 * Visit a parse tree produced by the `logique_et` labeled alternative
	 * in {@see AlgoParser::expression()}.
	 *
	 * @param Context\Logique_etContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLogique_et(Context\Logique_etContext $context);

	/**
	 * Visit a parse tree produced by the `constante` labeled alternative
	 * in {@see AlgoParser::expression()}.
	 *
	 * @param Context\ConstanteContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitConstante(Context\ConstanteContext $context);

	/**
	 * Visit a parse tree produced by the `entier` labeled alternative
	 * in {@see AlgoParser::expression()}.
	 *
	 * @param Context\EntierContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitEntier(Context\EntierContext $context);

	/**
	 * Visit a parse tree produced by the `comparaison` labeled alternative
	 * in {@see AlgoParser::expression()}.
	 *
	 * @param Context\ComparaisonContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitComparaison(Context\ComparaisonContext $context);

	/**
	 * Visit a parse tree produced by the `fonction` labeled alternative
	 * in {@see AlgoParser::expression()}.
	 *
	 * @param Context\FonctionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFonction(Context\FonctionContext $context);

	/**
	 * Visit a parse tree produced by the `variable` labeled alternative
	 * in {@see AlgoParser::expression()}.
	 *
	 * @param Context\VariableContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitVariable(Context\VariableContext $context);

	/**
	 * Visit a parse tree produced by the `oppose` labeled alternative
	 * in {@see AlgoParser::expression()}.
	 *
	 * @param Context\OpposeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOppose(Context\OpposeContext $context);

	/**
	 * Visit a parse tree produced by the `groupe` labeled alternative
	 * in {@see AlgoParser::expression()}.
	 *
	 * @param Context\GroupeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitGroupe(Context\GroupeContext $context);

	/**
	 * Visit a parse tree produced by {@see AlgoParser::opcomp()}.
	 *
	 * @param Context\OpcompContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOpcomp(Context\OpcompContext $context);

	/**
	 * Visit a parse tree produced by {@see AlgoParser::expression_liste()}.
	 *
	 * @param Context\Expression_listeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExpression_liste(Context\Expression_listeContext $context);
}