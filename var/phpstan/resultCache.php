<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1764372174,
	'meta' => array (
  'cacheVersion' => 'v12-linesToIgnore',
  'phpstanVersion' => '2.1.32',
  'metaExtensions' => 
  array (
  ),
  'phpVersion' => 80415,
  'projectConfig' => '{conditionalTags: {Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule: {phpstan.rules.rule: %noEnvCallsOutsideOfConfig%}, Larastan\\Larastan\\Rules\\NoModelMakeRule: {phpstan.rules.rule: %noModelMake%}, Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule: {phpstan.rules.rule: %noUnnecessaryCollectionCall%}, Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule: {phpstan.rules.rule: %noUnnecessaryEnumerableToArrayCalls%}, Larastan\\Larastan\\Rules\\OctaneCompatibilityRule: {phpstan.rules.rule: %checkOctaneCompatibility%}, Larastan\\Larastan\\Rules\\UnusedViewsRule: {phpstan.rules.rule: %checkUnusedViews%}, Larastan\\Larastan\\Rules\\NoMissingTranslationsRule: {phpstan.rules.rule: %checkMissingTranslations%}, Larastan\\Larastan\\Rules\\ModelAppendsRule: {phpstan.rules.rule: %checkModelAppends%}, Larastan\\Larastan\\Rules\\NoPublicModelScopeAndAccessorRule: {phpstan.rules.rule: %checkModelMethodVisibility%}, Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %generalizeEnvReturnType%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension: {phpstan.broker.dynamicMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension: {phpstan.broker.dynamicStaticMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\Rules\\ConfigCollectionRule: {phpstan.rules.rule: %checkConfigTypes%}, PHPStan\\Rules\\DisallowedConstructs\\DisallowedLooseComparisonRule: {phpstan.rules.rule: %strictRules.disallowedLooseComparison%}, PHPStan\\Rules\\BooleansInConditions\\BooleanInBooleanAndRule: {phpstan.rules.rule: %strictRules.booleansInConditions%}, PHPStan\\Rules\\BooleansInConditions\\BooleanInBooleanNotRule: {phpstan.rules.rule: %strictRules.booleansInConditions%}, PHPStan\\Rules\\BooleansInConditions\\BooleanInBooleanOrRule: {phpstan.rules.rule: %strictRules.booleansInConditions%}, PHPStan\\Rules\\BooleansInConditions\\BooleanInDoWhileConditionRule: {phpstan.rules.rule: %strictRules.booleansInLoopConditions%}, PHPStan\\Rules\\BooleansInConditions\\BooleanInElseIfConditionRule: {phpstan.rules.rule: %strictRules.booleansInConditions%}, PHPStan\\Rules\\BooleansInConditions\\BooleanInIfConditionRule: {phpstan.rules.rule: %strictRules.booleansInConditions%}, PHPStan\\Rules\\BooleansInConditions\\BooleanInTernaryOperatorRule: {phpstan.rules.rule: %strictRules.booleansInConditions%}, PHPStan\\Rules\\BooleansInConditions\\BooleanInWhileConditionRule: {phpstan.rules.rule: %strictRules.booleansInLoopConditions%}, PHPStan\\Rules\\Cast\\UselessCastRule: {phpstan.rules.rule: %strictRules.uselessCast%}, PHPStan\\Rules\\Classes\\RequireParentConstructCallRule: {phpstan.rules.rule: %strictRules.requireParentConstructorCall%}, PHPStan\\Rules\\DisallowedConstructs\\DisallowedBacktickRule: {phpstan.rules.rule: %strictRules.disallowedBacktick%}, PHPStan\\Rules\\DisallowedConstructs\\DisallowedEmptyRule: {phpstan.rules.rule: %strictRules.disallowedEmpty%}, PHPStan\\Rules\\DisallowedConstructs\\DisallowedImplicitArrayCreationRule: {phpstan.rules.rule: %strictRules.disallowedImplicitArrayCreation%}, PHPStan\\Rules\\DisallowedConstructs\\DisallowedShortTernaryRule: {phpstan.rules.rule: %strictRules.disallowedShortTernary%}, PHPStan\\Rules\\ForeachLoop\\OverwriteVariablesWithForeachRule: {phpstan.rules.rule: %strictRules.overwriteVariablesWithLoop%}, PHPStan\\Rules\\ForLoop\\OverwriteVariablesWithForLoopInitRule: {phpstan.rules.rule: %strictRules.overwriteVariablesWithLoop%}, PHPStan\\Rules\\Functions\\ArrayFilterStrictRule: {phpstan.rules.rule: %strictRules.strictArrayFilter%}, PHPStan\\Rules\\Functions\\ClosureUsesThisRule: {phpstan.rules.rule: %strictRules.closureUsesThis%}, PHPStan\\Rules\\Methods\\WrongCaseOfInheritedMethodRule: {phpstan.rules.rule: %strictRules.matchingInheritedMethodNames%}, PHPStan\\Rules\\Operators\\OperandInArithmeticPostDecrementRule: {phpstan.rules.rule: %strictRules.numericOperandsInArithmeticOperators%}, PHPStan\\Rules\\Operators\\OperandInArithmeticPostIncrementRule: {phpstan.rules.rule: %strictRules.numericOperandsInArithmeticOperators%}, PHPStan\\Rules\\Operators\\OperandInArithmeticPreDecrementRule: {phpstan.rules.rule: %strictRules.numericOperandsInArithmeticOperators%}, PHPStan\\Rules\\Operators\\OperandInArithmeticPreIncrementRule: {phpstan.rules.rule: %strictRules.numericOperandsInArithmeticOperators%}, PHPStan\\Rules\\Operators\\OperandInArithmeticUnaryMinusRule: {phpstan.rules.rule: [%strictRules.numericOperandsInArithmeticOperators%, %featureToggles.bleedingEdge%]}, PHPStan\\Rules\\Operators\\OperandInArithmeticUnaryPlusRule: {phpstan.rules.rule: [%strictRules.numericOperandsInArithmeticOperators%, %featureToggles.bleedingEdge%]}, PHPStan\\Rules\\Operators\\OperandsInArithmeticAdditionRule: {phpstan.rules.rule: %strictRules.numericOperandsInArithmeticOperators%}, PHPStan\\Rules\\Operators\\OperandsInArithmeticDivisionRule: {phpstan.rules.rule: %strictRules.numericOperandsInArithmeticOperators%}, PHPStan\\Rules\\Operators\\OperandsInArithmeticExponentiationRule: {phpstan.rules.rule: %strictRules.numericOperandsInArithmeticOperators%}, PHPStan\\Rules\\Operators\\OperandsInArithmeticModuloRule: {phpstan.rules.rule: %strictRules.numericOperandsInArithmeticOperators%}, PHPStan\\Rules\\Operators\\OperandsInArithmeticMultiplicationRule: {phpstan.rules.rule: %strictRules.numericOperandsInArithmeticOperators%}, PHPStan\\Rules\\Operators\\OperandsInArithmeticSubtractionRule: {phpstan.rules.rule: %strictRules.numericOperandsInArithmeticOperators%}, PHPStan\\Rules\\StrictCalls\\DynamicCallOnStaticMethodsRule: {phpstan.rules.rule: %strictRules.dynamicCallOnStaticMethod%}, PHPStan\\Rules\\StrictCalls\\DynamicCallOnStaticMethodsCallableRule: {phpstan.rules.rule: %strictRules.dynamicCallOnStaticMethod%}, PHPStan\\Rules\\StrictCalls\\StrictFunctionCallsRule: {phpstan.rules.rule: %strictRules.strictFunctionCalls%}, PHPStan\\Rules\\SwitchConditions\\MatchingTypeInSwitchCaseConditionRule: {phpstan.rules.rule: %strictRules.switchConditionsMatchingType%}, PHPStan\\Rules\\VariableVariables\\VariableMethodCallRule: {phpstan.rules.rule: %strictRules.noVariableVariables%}, PHPStan\\Rules\\VariableVariables\\VariableMethodCallableRule: {phpstan.rules.rule: %strictRules.noVariableVariables%}, PHPStan\\Rules\\VariableVariables\\VariableStaticMethodCallRule: {phpstan.rules.rule: %strictRules.noVariableVariables%}, PHPStan\\Rules\\VariableVariables\\VariableStaticMethodCallableRule: {phpstan.rules.rule: %strictRules.noVariableVariables%}, PHPStan\\Rules\\VariableVariables\\VariableStaticPropertyFetchRule: {phpstan.rules.rule: %strictRules.noVariableVariables%}, PHPStan\\Rules\\VariableVariables\\VariableVariablesRule: {phpstan.rules.rule: %strictRules.noVariableVariables%}, PHPStan\\Rules\\VariableVariables\\VariablePropertyFetchRule: {phpstan.rules.rule: %strictRules.noVariableVariables%}, PHPStan\\Rules\\Methods\\IllegalConstructorMethodCallRule: {phpstan.rules.rule: %strictRules.illegalConstructorMethodCall%}, PHPStan\\Rules\\Methods\\IllegalConstructorStaticCallRule: {phpstan.rules.rule: %strictRules.illegalConstructorMethodCall%}}, parameters: {universalObjectCratesClasses: [Illuminate\\Http\\Request, Illuminate\\Support\\Optional, Illuminate\\Support\\Fluent], earlyTerminatingFunctionCalls: [abort, dd], mixinExcludeClasses: [Eloquent], bootstrapFiles: [bootstrap.php], checkOctaneCompatibility: false, noEnvCallsOutsideOfConfig: true, noModelMake: true, noUnnecessaryCollectionCall: true, noUnnecessaryCollectionCallOnly: [], noUnnecessaryCollectionCallExcept: [], noUnnecessaryEnumerableToArrayCalls: false, squashedMigrationsPath: [], databaseMigrationsPath: [], disableMigrationScan: false, disableSchemaScan: false, configDirectories: [], viewDirectories: [], translationDirectories: [], checkModelProperties: false, checkUnusedViews: false, checkMissingTranslations: false, checkModelAppends: true, checkModelMethodVisibility: false, generalizeEnvReturnType: false, checkConfigTypes: false, checkAuthCallsWhenInRequestScope: false, strictRulesInstalled: true, polluteScopeWithLoopInitialAssignments: false, polluteScopeWithAlwaysIterableForeach: false, polluteScopeWithBlock: false, checkDynamicProperties: true, checkExplicitMixedMissingReturn: true, checkFunctionNameCase: true, checkInternalClassCaseSensitivity: true, reportMaybesInMethodSignatures: true, reportStaticMethodSignatures: true, reportMaybesInPropertyPhpDocTypes: true, reportWrongPhpDocTypeInVarTag: true, checkStrictPrintfPlaceholderTypes: true, strictRules: {allRules: true, disallowedLooseComparison: %strictRules.allRules%, booleansInConditions: %strictRules.allRules%, booleansInLoopConditions: [%strictRules.allRules%, %featureToggles.bleedingEdge%], uselessCast: %strictRules.allRules%, requireParentConstructorCall: %strictRules.allRules%, disallowedBacktick: %strictRules.allRules%, disallowedEmpty: %strictRules.allRules%, disallowedImplicitArrayCreation: %strictRules.allRules%, disallowedShortTernary: %strictRules.allRules%, overwriteVariablesWithLoop: %strictRules.allRules%, closureUsesThis: %strictRules.allRules%, matchingInheritedMethodNames: %strictRules.allRules%, numericOperandsInArithmeticOperators: %strictRules.allRules%, strictFunctionCalls: %strictRules.allRules%, dynamicCallOnStaticMethod: %strictRules.allRules%, switchConditionsMatchingType: %strictRules.allRules%, noVariableVariables: %strictRules.allRules%, strictArrayFilter: %strictRules.allRules%, illegalConstructorMethodCall: %strictRules.allRules%}, paths: [/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/app, /home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/routes, /home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/database], level: 8, tmpDir: /home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/var/phpstan, checkImplicitMixed: true, treatPhpDocTypesAsCertain: false, excludePaths: {analyseAndScan: [*/storage/*, */bootstrap/*, */vendor/*], analyse: []}}, rules: [Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessWithFunctionCallsRule, Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessValueFunctionCallsRule, Larastan\\Larastan\\Rules\\DeferrableServiceProviderMissingProvidesRule, Larastan\\Larastan\\Rules\\ConsoleCommand\\UndefinedArgumentOrOptionRule], services: {{class: Larastan\\Larastan\\Methods\\RelationForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\EloquentBuilderForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderTapProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderCollectionProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\StorageMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\Extension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelFactoryMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\RedirectResponseMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\MacroMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ViewWithMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelAccessorExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\HigherOrderCollectionProxyPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\HigherOrderTapProxyExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\Properties\\ModelRelationsExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelOnlyDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelFactoryDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthManagerExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DateExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestFileExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestRouteExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestUserExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\EloquentBuilderExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RelationCollectionExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TestCaseExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Support\\CollectionHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AuthExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\CollectExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\NowAndTodayExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ResponseExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValidatorExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\LiteralExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionFilterRejectDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionWhereNotNullDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\NewModelQueryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\FactoryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: true}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: true}}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AppExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValueExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\StrExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\TapExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\StorageDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\GenericEloquentCollectionTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Types\\ViewStringTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Rules\\OctaneCompatibilityRule}, {class: Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule, arguments: {configDirectories: %configDirectories%}}, {class: Larastan\\Larastan\\Rules\\NoModelMakeRule}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule, arguments: {onlyMethods: %noUnnecessaryCollectionCallOnly%, excludeMethods: %noUnnecessaryCollectionCallExcept%}}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule}, {class: Larastan\\Larastan\\Rules\\ModelAppendsRule}, {class: Larastan\\Larastan\\Rules\\NoPublicModelScopeAndAccessorRule}, {class: Larastan\\Larastan\\Types\\GenericEloquentBuilderTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppFacadeEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\ModelProperty\\ModelPropertyTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension], arguments: {active: %checkModelProperties%}}, {class: Larastan\\Larastan\\Types\\CollectionOf\\CollectionOfTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Properties\\MigrationHelper, arguments: {databaseMigrationPath: %databaseMigrationsPath%, disableMigrationScan: %disableMigrationScan%, parser: @migrationsParser, reflectionProvider: @reflectionProvider}}, iamcalSqlParser: {class: Larastan\\Larastan\\SQL\\IamcalSqlParser, autowired: false}, sqlParserFactory: {class: Larastan\\Larastan\\SQL\\SqlParserFactory, arguments: {iamcalSqlParser: @iamcalSqlParser}}, sqlParser: {type: Larastan\\Larastan\\SQL\\SqlParser, factory: [@sqlParserFactory, create]}, {class: Larastan\\Larastan\\Properties\\SquashedMigrationHelper, arguments: {schemaPaths: %squashedMigrationsPath%, disableSchemaScan: %disableSchemaScan%}}, {class: Larastan\\Larastan\\Properties\\ModelCastHelper}, {class: Larastan\\Larastan\\Properties\\ModelPropertyHelper}, {class: Larastan\\Larastan\\Rules\\ModelRuleHelper}, {class: Larastan\\Larastan\\Methods\\BuilderHelper, arguments: {checkProperties: %checkModelProperties%}}, {class: Larastan\\Larastan\\Rules\\RelationExistenceRule, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Bus\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Events\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Properties\\Schema\\MySqlDataTypeToPhpTypeConverter}, {class: Larastan\\Larastan\\LarastanStubFilesExtension, tags: [phpstan.stubFilesExtension]}, {class: Larastan\\Larastan\\Rules\\UnusedViewsRule}, {class: Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedEmailViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewFacadeMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedRouteFacadeViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewInAnotherViewCollector}, {class: Larastan\\Larastan\\Support\\ViewFileHelper, arguments: {viewDirectories: %viewDirectories%}}, {class: Larastan\\Larastan\\Support\\ViewParser, arguments: {parser: @currentPhpVersionSimpleDirectParser}}, {class: Larastan\\Larastan\\Rules\\NoMissingTranslationsRule, arguments: {translationDirectories: %translationDirectories%}}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationTranslatorCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationFacadeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationViewCollector}, {class: Larastan\\Larastan\\ReturnTypes\\ApplicationMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\ArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\OptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasOptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TranslatorGetReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\LangGetReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TransHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DoubleUnderscoreHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeHelper}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationResolver}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationHelper}, {class: Larastan\\Larastan\\Support\\HigherOrderCollectionProxyHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension}, {class: Larastan\\Larastan\\Support\\ConfigParser, arguments: {parser: @currentPhpVersionSimpleDirectParser, configPaths: %configDirectories%}}, {class: Larastan\\Larastan\\Internal\\ConfigHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\FormRequestSafeDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\ConfigCollectionRule}, {class: Illuminate\\Filesystem\\Filesystem, autowired: self}, migrationsParser: {class: PHPStan\\Parser\\CachedParser, arguments: {originalParser: @currentPhpVersionSimpleDirectParser, cachedNodesByStringCountMax: %cache.nodesByStringCountMax%}, autowired: false}, {class: PHPStan\\Rules\\BooleansInConditions\\BooleanRuleHelper}, {class: PHPStan\\Rules\\Operators\\OperatorRuleHelper}, {class: PHPStan\\Rules\\VariableVariables\\VariablePropertyFetchRule, arguments: {universalObjectCratesClasses: %universalObjectCratesClasses%}}, {class: PHPStan\\Rules\\DisallowedConstructs\\DisallowedLooseComparisonRule}, {class: PHPStan\\Rules\\BooleansInConditions\\BooleanInBooleanAndRule}, {class: PHPStan\\Rules\\BooleansInConditions\\BooleanInBooleanNotRule}, {class: PHPStan\\Rules\\BooleansInConditions\\BooleanInBooleanOrRule}, {class: PHPStan\\Rules\\BooleansInConditions\\BooleanInDoWhileConditionRule}, {class: PHPStan\\Rules\\BooleansInConditions\\BooleanInElseIfConditionRule}, {class: PHPStan\\Rules\\BooleansInConditions\\BooleanInIfConditionRule}, {class: PHPStan\\Rules\\BooleansInConditions\\BooleanInTernaryOperatorRule}, {class: PHPStan\\Rules\\BooleansInConditions\\BooleanInWhileConditionRule}, {class: PHPStan\\Rules\\Cast\\UselessCastRule, arguments: {treatPhpDocTypesAsCertain: %treatPhpDocTypesAsCertain%, treatPhpDocTypesAsCertainTip: %tips.treatPhpDocTypesAsCertain%}}, {class: PHPStan\\Rules\\Classes\\RequireParentConstructCallRule}, {class: PHPStan\\Rules\\DisallowedConstructs\\DisallowedBacktickRule}, {class: PHPStan\\Rules\\DisallowedConstructs\\DisallowedEmptyRule}, {class: PHPStan\\Rules\\DisallowedConstructs\\DisallowedImplicitArrayCreationRule}, {class: PHPStan\\Rules\\DisallowedConstructs\\DisallowedShortTernaryRule}, {class: PHPStan\\Rules\\ForeachLoop\\OverwriteVariablesWithForeachRule}, {class: PHPStan\\Rules\\ForLoop\\OverwriteVariablesWithForLoopInitRule}, {class: PHPStan\\Rules\\Functions\\ArrayFilterStrictRule, arguments: {treatPhpDocTypesAsCertain: %treatPhpDocTypesAsCertain%, checkNullables: %checkNullables%, treatPhpDocTypesAsCertainTip: %tips.treatPhpDocTypesAsCertain%}}, {class: PHPStan\\Rules\\Functions\\ClosureUsesThisRule}, {class: PHPStan\\Rules\\Methods\\WrongCaseOfInheritedMethodRule}, {class: PHPStan\\Rules\\Methods\\IllegalConstructorMethodCallRule}, {class: PHPStan\\Rules\\Methods\\IllegalConstructorStaticCallRule}, {class: PHPStan\\Rules\\Operators\\OperandInArithmeticPostDecrementRule}, {class: PHPStan\\Rules\\Operators\\OperandInArithmeticPostIncrementRule}, {class: PHPStan\\Rules\\Operators\\OperandInArithmeticPreDecrementRule}, {class: PHPStan\\Rules\\Operators\\OperandInArithmeticPreIncrementRule}, {class: PHPStan\\Rules\\Operators\\OperandInArithmeticUnaryMinusRule}, {class: PHPStan\\Rules\\Operators\\OperandInArithmeticUnaryPlusRule}, {class: PHPStan\\Rules\\Operators\\OperandsInArithmeticAdditionRule}, {class: PHPStan\\Rules\\Operators\\OperandsInArithmeticDivisionRule}, {class: PHPStan\\Rules\\Operators\\OperandsInArithmeticExponentiationRule}, {class: PHPStan\\Rules\\Operators\\OperandsInArithmeticModuloRule}, {class: PHPStan\\Rules\\Operators\\OperandsInArithmeticMultiplicationRule}, {class: PHPStan\\Rules\\Operators\\OperandsInArithmeticSubtractionRule}, {class: PHPStan\\Rules\\StrictCalls\\DynamicCallOnStaticMethodsRule}, {class: PHPStan\\Rules\\StrictCalls\\DynamicCallOnStaticMethodsCallableRule}, {class: PHPStan\\Rules\\StrictCalls\\StrictFunctionCallsRule}, {class: PHPStan\\Rules\\SwitchConditions\\MatchingTypeInSwitchCaseConditionRule}, {class: PHPStan\\Rules\\VariableVariables\\VariableMethodCallRule}, {class: PHPStan\\Rules\\VariableVariables\\VariableMethodCallableRule}, {class: PHPStan\\Rules\\VariableVariables\\VariableStaticMethodCallRule}, {class: PHPStan\\Rules\\VariableVariables\\VariableStaticMethodCallableRule}, {class: PHPStan\\Rules\\VariableVariables\\VariableStaticPropertyFetchRule}, {class: PHPStan\\Rules\\VariableVariables\\VariableVariablesRule}}}',
  'analysedPaths' => 
  array (
    0 => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/app',
    1 => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/routes',
    2 => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/database',
  ),
  'scannedFiles' => 
  array (
  ),
  'composerLocks' => 
  array (
    '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/composer.lock' => '84af60c54f87b213493ee07f08cc1be661ec835e',
  ),
  'composerInstalled' => 
  array (
    '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/installed.php' => 
    array (
      'versions' => 
      array (
        'brianium/paratest' => 
        array (
          'pretty_version' => 'v7.14.2',
          'version' => '7.14.2.0',
          'reference' => 'de06de1ae1203b11976c6ca01d6a9081c8b33d45',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../brianium/paratest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'brick/math' => 
        array (
          'pretty_version' => '0.14.1',
          'version' => '0.14.1.0',
          'reference' => 'f05858549e5f9d7bb45875a75583240a38a281d0',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../brick/math',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'carbonphp/carbon-doctrine-types' => 
        array (
          'pretty_version' => '3.2.0',
          'version' => '3.2.0.0',
          'reference' => '18ba5ddfec8976260ead6e866180bd5d2f71aa1d',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../carbonphp/carbon-doctrine-types',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'cordoval/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'davedevelopment/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'dflydev/dot-access-data' => 
        array (
          'pretty_version' => 'v3.0.3',
          'version' => '3.0.3.0',
          'reference' => 'a23a2bf4f31d3518f3ecb38660c95715dfead60f',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../dflydev/dot-access-data',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/deprecations' => 
        array (
          'pretty_version' => '1.1.5',
          'version' => '1.1.5.0',
          'reference' => '459c2f5dd3d6a4633d3b5f46ee2b1c40f57d3f38',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../doctrine/deprecations',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'doctrine/inflector' => 
        array (
          'pretty_version' => '2.1.0',
          'version' => '2.1.0.0',
          'reference' => '6d6c96277ea252fc1304627204c3d5e6e15faa3b',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../doctrine/inflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/lexer' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => '31ad66abc0fc9e1a1f2d9bc6a42668d2fbbcd6dd',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../doctrine/lexer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'dragonmantank/cron-expression' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => 'd61a8a9604ec1f8c3d150d09db6ce98b32675013',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../dragonmantank/cron-expression',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'egulias/email-validator' => 
        array (
          'pretty_version' => '4.0.4',
          'version' => '4.0.4.0',
          'reference' => 'd42c8731f0624ad6bdc8d3e5e9a4524f68801cfa',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../egulias/email-validator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'fakerphp/faker' => 
        array (
          'pretty_version' => 'v1.24.1',
          'version' => '1.24.1.0',
          'reference' => 'e0ee18eb1e6dc3cda3ce9fd97e5a0689a88a64b5',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../fakerphp/faker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fidry/cpu-core-counter' => 
        array (
          'pretty_version' => '1.3.0',
          'version' => '1.3.0.0',
          'reference' => 'db9508f7b1474469d9d3c53b86f817e344732678',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../fidry/cpu-core-counter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'filp/whoops' => 
        array (
          'pretty_version' => '2.18.4',
          'version' => '2.18.4.0',
          'reference' => 'd2102955e48b9fd9ab24280a7ad12ed552752c4d',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../filp/whoops',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fruitcake/php-cors' => 
        array (
          'pretty_version' => 'v1.3.0',
          'version' => '1.3.0.0',
          'reference' => '3d158f36e7875e2f040f37bc0573956240a5a38b',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../fruitcake/php-cors',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'graham-campbell/result-type' => 
        array (
          'pretty_version' => 'v1.1.3',
          'version' => '1.1.3.0',
          'reference' => '3ba905c11371512af9d9bdd27d99b782216b6945',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../graham-campbell/result-type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/guzzle' => 
        array (
          'pretty_version' => '7.10.0',
          'version' => '7.10.0.0',
          'reference' => 'b51ac707cfa420b7bfd4e4d5e510ba8008e822b4',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../guzzlehttp/guzzle',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/promises' => 
        array (
          'pretty_version' => '2.3.0',
          'version' => '2.3.0.0',
          'reference' => '481557b130ef3790cf82b713667b43030dc9c957',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../guzzlehttp/promises',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/psr7' => 
        array (
          'pretty_version' => '2.8.0',
          'version' => '2.8.0.0',
          'reference' => '21dc724a0583619cd1652f673303492272778051',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../guzzlehttp/psr7',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/uri-template' => 
        array (
          'pretty_version' => 'v1.0.5',
          'version' => '1.0.5.0',
          'reference' => '4f4bbd4e7172148801e76e3decc1e559bdee34e1',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../guzzlehttp/uri-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'hamcrest/hamcrest-php' => 
        array (
          'pretty_version' => 'v2.1.1',
          'version' => '2.1.1.0',
          'reference' => 'f8b1c0173b22fa6ec77a81fe63e5b01eba7e6487',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../hamcrest/hamcrest-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'iamcal/sql-parser' => 
        array (
          'pretty_version' => 'v0.6',
          'version' => '0.6.0.0',
          'reference' => '947083e2dca211a6f12fb1beb67a01e387de9b62',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../iamcal/sql-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'illuminate/auth' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.40.2',
          ),
        ),
        'illuminate/broadcasting' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.40.2',
          ),
        ),
        'illuminate/bus' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.40.2',
          ),
        ),
        'illuminate/cache' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.40.2',
          ),
        ),
        'illuminate/collections' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.40.2',
          ),
        ),
        'illuminate/concurrency' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.40.2',
          ),
        ),
        'illuminate/conditionable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.40.2',
          ),
        ),
        'illuminate/config' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.40.2',
          ),
        ),
        'illuminate/console' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.40.2',
          ),
        ),
        'illuminate/container' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.40.2',
          ),
        ),
        'illuminate/contracts' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.40.2',
          ),
        ),
        'illuminate/cookie' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.40.2',
          ),
        ),
        'illuminate/database' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.40.2',
          ),
        ),
        'illuminate/encryption' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.40.2',
          ),
        ),
        'illuminate/events' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.40.2',
          ),
        ),
        'illuminate/filesystem' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.40.2',
          ),
        ),
        'illuminate/hashing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.40.2',
          ),
        ),
        'illuminate/http' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.40.2',
          ),
        ),
        'illuminate/json-schema' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.40.2',
          ),
        ),
        'illuminate/log' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.40.2',
          ),
        ),
        'illuminate/macroable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.40.2',
          ),
        ),
        'illuminate/mail' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.40.2',
          ),
        ),
        'illuminate/notifications' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.40.2',
          ),
        ),
        'illuminate/pagination' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.40.2',
          ),
        ),
        'illuminate/pipeline' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.40.2',
          ),
        ),
        'illuminate/process' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.40.2',
          ),
        ),
        'illuminate/queue' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.40.2',
          ),
        ),
        'illuminate/redis' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.40.2',
          ),
        ),
        'illuminate/routing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.40.2',
          ),
        ),
        'illuminate/session' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.40.2',
          ),
        ),
        'illuminate/support' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.40.2',
          ),
        ),
        'illuminate/testing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.40.2',
          ),
        ),
        'illuminate/translation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.40.2',
          ),
        ),
        'illuminate/validation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.40.2',
          ),
        ),
        'illuminate/view' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v12.40.2',
          ),
        ),
        'jean85/pretty-package-versions' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '4d7aa5dab42e2a76d99559706022885de0e18e1a',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../jean85/pretty-package-versions',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'kodova/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'larastan/larastan' => 
        array (
          'pretty_version' => 'v3.8.0',
          'version' => '3.8.0.0',
          'reference' => 'd13ef96d652d1b2a8f34f1760ba6bf5b9c98112e',
          'type' => 'phpstan-extension',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../larastan/larastan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/breeze' => 
        array (
          'pretty_version' => 'v2.3.8',
          'version' => '2.3.8.0',
          'reference' => '1a29c5792818bd4cddf70b5f743a227e02fbcfcd',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../laravel/breeze',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/framework' => 
        array (
          'pretty_version' => 'v12.40.2',
          'version' => '12.40.2.0',
          'reference' => '1ccd99220b474500e672b373f32bd709ec38de50',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../laravel/framework',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/pail' => 
        array (
          'pretty_version' => 'v1.2.4',
          'version' => '1.2.4.0',
          'reference' => '49f92285ff5d6fc09816e976a004f8dec6a0ea30',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../laravel/pail',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/pint' => 
        array (
          'pretty_version' => 'v1.26.0',
          'version' => '1.26.0.0',
          'reference' => '69dcca060ecb15e4b564af63d1f642c81a241d6f',
          'type' => 'project',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../laravel/pint',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/prompts' => 
        array (
          'pretty_version' => 'v0.3.8',
          'version' => '0.3.8.0',
          'reference' => '096748cdfb81988f60090bbb839ce3205ace0d35',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../laravel/prompts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/sail' => 
        array (
          'pretty_version' => 'v1.48.1',
          'version' => '1.48.1.0',
          'reference' => 'ef122b223f5fca5e5d88bda5127c846710886329',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../laravel/sail',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/sanctum' => 
        array (
          'pretty_version' => 'v4.2.1',
          'version' => '4.2.1.0',
          'reference' => 'f5fb373be39a246c74a060f2cf2ae2c2145b3664',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../laravel/sanctum',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/serializable-closure' => 
        array (
          'pretty_version' => 'v2.0.7',
          'version' => '2.0.7.0',
          'reference' => 'cb291e4c998ac50637c7eeb58189c14f5de5b9dd',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../laravel/serializable-closure',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/tinker' => 
        array (
          'pretty_version' => 'v2.10.2',
          'version' => '2.10.2.0',
          'reference' => '3bcb5f62d6f837e0f093a601e26badafb127bd4c',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../laravel/tinker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/commonmark' => 
        array (
          'pretty_version' => '2.8.0',
          'version' => '2.8.0.0',
          'reference' => '4efa10c1e56488e658d10adf7b7b7dcd19940bfb',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../league/commonmark',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/config' => 
        array (
          'pretty_version' => 'v1.2.0',
          'version' => '1.2.0.0',
          'reference' => '754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../league/config',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem' => 
        array (
          'pretty_version' => '3.30.2',
          'version' => '3.30.2.0',
          'reference' => '5966a8ba23e62bdb518dd9e0e665c2dbd4b5b277',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../league/flysystem',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem-local' => 
        array (
          'pretty_version' => '3.30.2',
          'version' => '3.30.2.0',
          'reference' => 'ab4f9d0d672f601b102936aa728801dd1a11968d',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../league/flysystem-local',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/mime-type-detection' => 
        array (
          'pretty_version' => '1.16.0',
          'version' => '1.16.0.0',
          'reference' => '2d6702ff215bf922936ccc1ad31007edc76451b9',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../league/mime-type-detection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri' => 
        array (
          'pretty_version' => '7.6.0',
          'version' => '7.6.0.0',
          'reference' => 'f625804987a0a9112d954f9209d91fec52182344',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../league/uri',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri-interfaces' => 
        array (
          'pretty_version' => '7.6.0',
          'version' => '7.6.0.0',
          'reference' => 'ccbfb51c0445298e7e0b7f4481b942f589665368',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../league/uri-interfaces',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mockery/mockery' => 
        array (
          'pretty_version' => '1.6.12',
          'version' => '1.6.12.0',
          'reference' => '1f4efdd7d3beafe9807b08156dfcb176d18f1699',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../mockery/mockery',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'monolog/monolog' => 
        array (
          'pretty_version' => '3.9.0',
          'version' => '3.9.0.0',
          'reference' => '10d85740180ecba7896c87e06a166e0c95a0e3b6',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../monolog/monolog',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mtdowling/cron-expression' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '^1.0',
          ),
        ),
        'myclabs/deep-copy' => 
        array (
          'pretty_version' => '1.13.4',
          'version' => '1.13.4.0',
          'reference' => '07d290f0c47959fd5eed98c95ee5602db07e0b6a',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../myclabs/deep-copy',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nesbot/carbon' => 
        array (
          'pretty_version' => '3.10.3',
          'version' => '3.10.3.0',
          'reference' => '8e3643dcd149ae0fe1d2ff4f2c8e4bbfad7c165f',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../nesbot/carbon',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/schema' => 
        array (
          'pretty_version' => 'v1.3.3',
          'version' => '1.3.3.0',
          'reference' => '2befc2f42d7c715fd9d95efc31b1081e5d765004',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../nette/schema',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/utils' => 
        array (
          'pretty_version' => 'v4.0.9',
          'version' => '4.0.9.0',
          'reference' => '505a30ad386daa5211f08a318e47015b501cad30',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../nette/utils',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nikic/php-parser' => 
        array (
          'pretty_version' => 'v5.6.2',
          'version' => '5.6.2.0',
          'reference' => '3a454ca033b9e06b63282ce19562e892747449bb',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../nikic/php-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nunomaduro/collision' => 
        array (
          'pretty_version' => 'v8.8.3',
          'version' => '8.8.3.0',
          'reference' => '1dc9e88d105699d0fee8bb18890f41b274f6b4c4',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../nunomaduro/collision',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nunomaduro/termwind' => 
        array (
          'pretty_version' => 'v2.3.3',
          'version' => '2.3.3.0',
          'reference' => '6fb2a640ff502caace8e05fd7be3b503a7e1c017',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../nunomaduro/termwind',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'pestphp/pest' => 
        array (
          'pretty_version' => 'v4.1.6',
          'version' => '4.1.6.0',
          'reference' => 'ae419afd363299c29ad5b17e8b70d118b1068bb4',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../pestphp/pest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin' => 
        array (
          'pretty_version' => 'v4.0.0',
          'version' => '4.0.0.0',
          'reference' => '9d4b93d7f73d3f9c3189bb22c220fef271cdf568',
          'type' => 'composer-plugin',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../pestphp/pest-plugin',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-arch' => 
        array (
          'pretty_version' => 'v4.0.0',
          'version' => '4.0.0.0',
          'reference' => '25bb17e37920ccc35cbbcda3b00d596aadf3e58d',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../pestphp/pest-plugin-arch',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-laravel' => 
        array (
          'pretty_version' => 'v4.0.0',
          'version' => '4.0.0.0',
          'reference' => 'e12a07046b826a40b1c8632fd7b80d6b8d7b628e',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../pestphp/pest-plugin-laravel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-mutate' => 
        array (
          'pretty_version' => 'v4.0.1',
          'version' => '4.0.1.0',
          'reference' => 'd9b32b60b2385e1688a68cc227594738ec26d96c',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../pestphp/pest-plugin-mutate',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-profanity' => 
        array (
          'pretty_version' => 'v4.2.0',
          'version' => '4.2.0.0',
          'reference' => 'c37e5e2c7136ee4eae12082e7952332bc1c6600a',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../pestphp/pest-plugin-profanity',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/manifest' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => '54750ef60c58e43759730615a392c31c80e23176',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../phar-io/manifest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/version' => 
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../phar-io/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpdocumentor/reflection-common' => 
        array (
          'pretty_version' => '2.2.0',
          'version' => '2.2.0.0',
          'reference' => '1d01c49d4ed62f25aa84a747ad35d5a16924662b',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../phpdocumentor/reflection-common',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpdocumentor/reflection-docblock' => 
        array (
          'pretty_version' => '5.6.5',
          'version' => '5.6.5.0',
          'reference' => '90614c73d3800e187615e2dd236ad0e2a01bf761',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../phpdocumentor/reflection-docblock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpdocumentor/type-resolver' => 
        array (
          'pretty_version' => '1.12.0',
          'version' => '1.12.0.0',
          'reference' => '92a98ada2b93d9b201a613cb5a33584dde25f195',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../phpdocumentor/type-resolver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpoption/phpoption' => 
        array (
          'pretty_version' => '1.9.4',
          'version' => '1.9.4.0',
          'reference' => '638a154f8d4ee6a5cfa96d6a34dfbe0cffa9566d',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../phpoption/phpoption',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpstan/phpdoc-parser' => 
        array (
          'pretty_version' => '2.3.0',
          'version' => '2.3.0.0',
          'reference' => '1e0cd5370df5dd2e556a36b9c62f62e555870495',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../phpstan/phpdoc-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpstan/phpstan' => 
        array (
          'pretty_version' => '2.1.32',
          'version' => '2.1.32.0',
          'reference' => 'e126cad1e30a99b137b8ed75a85a676450ebb227',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../phpstan/phpstan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpstan/phpstan-strict-rules' => 
        array (
          'pretty_version' => '2.0.7',
          'version' => '2.0.7.0',
          'reference' => 'd6211c46213d4181054b3d77b10a5c5cb0d59538',
          'type' => 'phpstan-extension',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../phpstan/phpstan-strict-rules',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-code-coverage' => 
        array (
          'pretty_version' => '12.4.0',
          'version' => '12.4.0.0',
          'reference' => '67e8aed88f93d0e6e1cb7effe1a2dfc2fee6022c',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../phpunit/php-code-coverage',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-file-iterator' => 
        array (
          'pretty_version' => '6.0.0',
          'version' => '6.0.0.0',
          'reference' => '961bc913d42fe24a257bfff826a5068079ac7782',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../phpunit/php-file-iterator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-invoker' => 
        array (
          'pretty_version' => '6.0.0',
          'version' => '6.0.0.0',
          'reference' => '12b54e689b07a25a9b41e57736dfab6ec9ae5406',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../phpunit/php-invoker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-text-template' => 
        array (
          'pretty_version' => '5.0.0',
          'version' => '5.0.0.0',
          'reference' => 'e1367a453f0eda562eedb4f659e13aa900d66c53',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../phpunit/php-text-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-timer' => 
        array (
          'pretty_version' => '8.0.0',
          'version' => '8.0.0.0',
          'reference' => 'f258ce36aa457f3aa3339f9ed4c81fc66dc8c2cc',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../phpunit/php-timer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/phpunit' => 
        array (
          'pretty_version' => '12.4.4',
          'version' => '12.4.4.0',
          'reference' => '9253ec75a672e39fcc9d85bdb61448215b8162c7',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../phpunit/phpunit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'psr/clock' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'e41a24703d4560fd0acb709162f73b8adfc3aa0d',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../psr/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/clock-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/container' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../psr/container',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/container-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.1|2.0',
          ),
        ),
        'psr/event-dispatcher' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../psr/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-client' => 
        array (
          'pretty_version' => '1.0.3',
          'version' => '1.0.3.0',
          'reference' => 'bb5906edc1c324c9a05aa0873d40117941e5fa90',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../psr/http-client',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-client-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-factory' => 
        array (
          'pretty_version' => '1.1.0',
          'version' => '1.1.0.0',
          'reference' => '2b4765fddfe3b508ac62f829e852b1501d3f6e8a',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../psr/http-factory',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-factory-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-message' => 
        array (
          'pretty_version' => '2.0',
          'version' => '2.0.0.0',
          'reference' => '402d35bcb92c70c026d1a6a9883f06b2ead23d71',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../psr/http-message',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-message-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/log' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => 'f16e1d5863e37f8d8c2a01719f5b34baa2b714d3',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../psr/log',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/log-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
            1 => '3.0.0',
          ),
        ),
        'psr/simple-cache' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '764e0b3939f5ca87cb904f570ef9be2d78a07865',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../psr/simple-cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/simple-cache-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
          ),
        ),
        'psy/psysh' => 
        array (
          'pretty_version' => 'v0.12.15',
          'version' => '0.12.15.0',
          'reference' => '38953bc71491c838fcb6ebcbdc41ab7483cd549c',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../psy/psysh',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ralouphie/getallheaders' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => '120b605dfeb996808c31b6477290a714d356e822',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../ralouphie/getallheaders',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/collection' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '344572933ad0181accbf4ba763e85a0306a8c5e2',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../ramsey/collection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/uuid' => 
        array (
          'pretty_version' => '4.9.1',
          'version' => '4.9.1.0',
          'reference' => '81f941f6f729b1e3ceea61d9d014f8b6c6800440',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../ramsey/uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'rhumsaa/uuid' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '4.9.1',
          ),
        ),
        'roave/security-advisories' => 
        array (
          'pretty_version' => 'dev-latest',
          'version' => 'dev-latest',
          'reference' => '3f393e137e490ecb2ac77989a692129c31192de7',
          'type' => 'metapackage',
          'install_path' => NULL,
          'aliases' => 
          array (
            0 => '9999999-dev',
          ),
          'dev_requirement' => true,
        ),
        'sebastian/cli-parser' => 
        array (
          'pretty_version' => '4.2.0',
          'version' => '4.2.0.0',
          'reference' => '90f41072d220e5c40df6e8635f5dafba2d9d4d04',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../sebastian/cli-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/comparator' => 
        array (
          'pretty_version' => '7.1.3',
          'version' => '7.1.3.0',
          'reference' => 'dc904b4bb3ab070865fa4068cd84f3da8b945148',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../sebastian/comparator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/complexity' => 
        array (
          'pretty_version' => '5.0.0',
          'version' => '5.0.0.0',
          'reference' => 'bad4316aba5303d0221f43f8cee37eb58d384bbb',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../sebastian/complexity',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/diff' => 
        array (
          'pretty_version' => '7.0.0',
          'version' => '7.0.0.0',
          'reference' => '7ab1ea946c012266ca32390913653d844ecd085f',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../sebastian/diff',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/environment' => 
        array (
          'pretty_version' => '8.0.3',
          'version' => '8.0.3.0',
          'reference' => '24a711b5c916efc6d6e62aa65aa2ec98fef77f68',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../sebastian/environment',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/exporter' => 
        array (
          'pretty_version' => '7.0.2',
          'version' => '7.0.2.0',
          'reference' => '016951ae10980765e4e7aee491eb288c64e505b7',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../sebastian/exporter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/global-state' => 
        array (
          'pretty_version' => '8.0.2',
          'version' => '8.0.2.0',
          'reference' => 'ef1377171613d09edd25b7816f05be8313f9115d',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../sebastian/global-state',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/lines-of-code' => 
        array (
          'pretty_version' => '4.0.0',
          'version' => '4.0.0.0',
          'reference' => '97ffee3bcfb5805568d6af7f0f893678fc076d2f',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../sebastian/lines-of-code',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-enumerator' => 
        array (
          'pretty_version' => '7.0.0',
          'version' => '7.0.0.0',
          'reference' => '1effe8e9b8e068e9ae228e542d5d11b5d16db894',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../sebastian/object-enumerator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-reflector' => 
        array (
          'pretty_version' => '5.0.0',
          'version' => '5.0.0.0',
          'reference' => '4bfa827c969c98be1e527abd576533293c634f6a',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../sebastian/object-reflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/recursion-context' => 
        array (
          'pretty_version' => '7.0.1',
          'version' => '7.0.1.0',
          'reference' => '0b01998a7d5b1f122911a66bebcb8d46f0c82d8c',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../sebastian/recursion-context',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/type' => 
        array (
          'pretty_version' => '6.0.3',
          'version' => '6.0.3.0',
          'reference' => 'e549163b9760b8f71f191651d22acf32d56d6d4d',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../sebastian/type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/version' => 
        array (
          'pretty_version' => '6.0.0',
          'version' => '6.0.0.0',
          'reference' => '3e6ccf7657d4f0a59200564b08cead899313b53c',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../sebastian/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/backtrace' => 
        array (
          'pretty_version' => '1.8.1',
          'version' => '1.8.1.0',
          'reference' => '8c0f16a59ae35ec8c62d85c3c17585158f430110',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../spatie/backtrace',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/error-solutions' => 
        array (
          'pretty_version' => '1.1.3',
          'version' => '1.1.3.0',
          'reference' => 'e495d7178ca524f2dd0fe6a1d99a1e608e1c9936',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../spatie/error-solutions',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/flare-client-php' => 
        array (
          'pretty_version' => '1.10.1',
          'version' => '1.10.1.0',
          'reference' => 'bf1716eb98bd689451b071548ae9e70738dce62f',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../spatie/flare-client-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/ignition' => 
        array (
          'pretty_version' => '1.15.1',
          'version' => '1.15.1.0',
          'reference' => '31f314153020aee5af3537e507fef892ffbf8c85',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../spatie/ignition',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/laravel-ignition' => 
        array (
          'pretty_version' => '2.9.1',
          'version' => '2.9.1.0',
          'reference' => '1baee07216d6748ebd3a65ba97381b051838707a',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../spatie/laravel-ignition',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/once' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'staabm/side-effects-detector' => 
        array (
          'pretty_version' => '1.0.5',
          'version' => '1.0.5.0',
          'reference' => 'd8334211a140ce329c13726d4a715adbddd0a163',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../staabm/side-effects-detector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/clock' => 
        array (
          'pretty_version' => 'v7.4.0',
          'version' => '7.4.0.0',
          'reference' => '9169f24776edde469914c1e7a1442a50f7a4e110',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../symfony/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/console' => 
        array (
          'pretty_version' => 'v7.4.0',
          'version' => '7.4.0.0',
          'reference' => '0bc0f45254b99c58d45a8fbf9fb955d46cbd1bb8',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../symfony/console',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/css-selector' => 
        array (
          'pretty_version' => 'v7.4.0',
          'version' => '7.4.0.0',
          'reference' => 'ab862f478513e7ca2fe9ec117a6f01a8da6e1135',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../symfony/css-selector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/deprecation-contracts' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => '63afe740e99a13ba87ec199bb07bbdee937a5b62',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../symfony/deprecation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/error-handler' => 
        array (
          'pretty_version' => 'v7.4.0',
          'version' => '7.4.0.0',
          'reference' => '48be2b0653594eea32dcef130cca1c811dcf25c2',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../symfony/error-handler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher' => 
        array (
          'pretty_version' => 'v8.0.0',
          'version' => '8.0.0.0',
          'reference' => '573f95783a2ec6e38752979db139f09fec033f03',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../symfony/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-contracts' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => '59eb412e93815df44f05f342958efa9f46b1e586',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../symfony/event-dispatcher-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.0|3.0',
          ),
        ),
        'symfony/finder' => 
        array (
          'pretty_version' => 'v7.4.0',
          'version' => '7.4.0.0',
          'reference' => '340b9ed7320570f319028a2cbec46d40535e94bd',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../symfony/finder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-foundation' => 
        array (
          'pretty_version' => 'v7.4.0',
          'version' => '7.4.0.0',
          'reference' => '769c1720b68e964b13b58529c17d4a385c62167b',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../symfony/http-foundation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-kernel' => 
        array (
          'pretty_version' => 'v7.4.0',
          'version' => '7.4.0.0',
          'reference' => '7348193cd384495a755554382e4526f27c456085',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../symfony/http-kernel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mailer' => 
        array (
          'pretty_version' => 'v7.4.0',
          'version' => '7.4.0.0',
          'reference' => 'a3d9eea8cfa467ece41f0f54ba28185d74bd53fd',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../symfony/mailer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mime' => 
        array (
          'pretty_version' => 'v7.4.0',
          'version' => '7.4.0.0',
          'reference' => 'bdb02729471be5d047a3ac4a69068748f1a6be7a',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../symfony/mime',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-ctype' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => 'a3cc8b044a6ea513310cbd48ef7333b384945638',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../symfony/polyfill-ctype',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-grapheme' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '380872130d3a5dd3ace2f4010d95125fde5d5c70',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../symfony/polyfill-intl-grapheme',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-idn' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '9614ac4d8061dc257ecc64cba1b140873dce8ad3',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../symfony/polyfill-intl-idn',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-normalizer' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '3833d7255cc303546435cb650316bff708a1c75c',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../symfony/polyfill-intl-normalizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-mbstring' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '6d857f4d76bd4b343eac26d6b539585d2bc56493',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../symfony/polyfill-mbstring',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php80' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '0cc9dd0f17f61d8131e7df6b84bd344899fe2608',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../symfony/polyfill-php80',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php83' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '17f6f9a6b1735c0f163024d959f700cfbc5155e5',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../symfony/polyfill-php83',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php84' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => 'd8ced4d875142b6a7426000426b8abc631d6b191',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../symfony/polyfill-php84',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php85' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => 'd4e5fcd4ab3d998ab16c0db48e6cbb9a01993f91',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../symfony/polyfill-php85',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-uuid' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '21533be36c24be3f4b1669c4725c7d1d2bab4ae2',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../symfony/polyfill-uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/process' => 
        array (
          'pretty_version' => 'v7.4.0',
          'version' => '7.4.0.0',
          'reference' => '7ca8dc2d0dcf4882658313aba8be5d9fd01026c8',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../symfony/process',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/routing' => 
        array (
          'pretty_version' => 'v7.4.0',
          'version' => '7.4.0.0',
          'reference' => '4720254cb2644a0b876233d258a32bf017330db7',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../symfony/routing',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/service-contracts' => 
        array (
          'pretty_version' => 'v3.6.1',
          'version' => '3.6.1.0',
          'reference' => '45112560a3ba2d715666a509a0bc9521d10b6c43',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../symfony/service-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/string' => 
        array (
          'pretty_version' => 'v8.0.0',
          'version' => '8.0.0.0',
          'reference' => 'f929eccf09531078c243df72398560e32fa4cf4f',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../symfony/string',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation' => 
        array (
          'pretty_version' => 'v7.4.0',
          'version' => '7.4.0.0',
          'reference' => '2d01ca0da3f092f91eeedb46f24aa30d2fca8f68',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../symfony/translation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-contracts' => 
        array (
          'pretty_version' => 'v3.6.1',
          'version' => '3.6.1.0',
          'reference' => '65a8bc82080447fae78373aa10f8d13b38338977',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../symfony/translation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.3|3.0',
          ),
        ),
        'symfony/uid' => 
        array (
          'pretty_version' => 'v7.4.0',
          'version' => '7.4.0.0',
          'reference' => '2498e9f81b7baa206f44de583f2f48350b90142c',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../symfony/uid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/var-dumper' => 
        array (
          'pretty_version' => 'v7.4.0',
          'version' => '7.4.0.0',
          'reference' => '41fd6c4ae28c38b294b42af6db61446594a0dece',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../symfony/var-dumper',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/yaml' => 
        array (
          'pretty_version' => 'v7.4.0',
          'version' => '7.4.0.0',
          'reference' => '6c84a4b55aee4cd02034d1c528e83f69ddf63810',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../symfony/yaml',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'ta-tikoma/phpunit-architecture-test' => 
        array (
          'pretty_version' => '0.8.5',
          'version' => '0.8.5.0',
          'reference' => 'cf6fb197b676ba716837c886baca842e4db29005',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../ta-tikoma/phpunit-architecture-test',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'theseer/tokenizer' => 
        array (
          'pretty_version' => '1.3.1',
          'version' => '1.3.1.0',
          'reference' => 'b7489ce515e168639d17feec34b8847c326b0b3c',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../theseer/tokenizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'tijsverkoyen/css-to-inline-styles' => 
        array (
          'pretty_version' => 'v2.3.0',
          'version' => '2.3.0.0',
          'reference' => '0d72ac1c00084279c1816675284073c5a337c20d',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../tijsverkoyen/css-to-inline-styles',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'vlucas/phpdotenv' => 
        array (
          'pretty_version' => 'v5.6.2',
          'version' => '5.6.2.0',
          'reference' => '24ac4c74f91ee2c193fa1aaa5c249cb0822809af',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../vlucas/phpdotenv',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'voku/portable-ascii' => 
        array (
          'pretty_version' => '2.0.3',
          'version' => '2.0.3.0',
          'reference' => 'b1d923f88091c6bf09699efcd7c8a1b1bfd7351d',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../voku/portable-ascii',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'webmozart/assert' => 
        array (
          'pretty_version' => '1.12.1',
          'version' => '1.12.1.0',
          'reference' => '9be6926d8b485f55b9229203f962b51ed377ba68',
          'type' => 'library',
          'install_path' => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/composer/../webmozart/assert',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
      ),
    ),
  ),
  'executedFilesHashes' => 
  array (
    '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/larastan/larastan/bootstrap.php' => '28392079817075879815f110287690e80398fe5e',
    'phar:///home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute85.php' => '123dcd45f03f2463904087a66bfe2bc139760df0',
    'phar:///home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php' => '0b4b78277eb6545955d2ce5e09bff28f1f8052c8',
    'phar:///home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php' => 'a3e6299b87ee5d407dae7651758edfa11a74cb11',
    'phar:///home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php' => '1b349aa997a834faeafe05fa21bc31cae22bf2e2',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'PDO',
    2 => 'Phar',
    3 => 'Reflection',
    4 => 'SPL',
    5 => 'SimpleXML',
    6 => 'ctype',
    7 => 'curl',
    8 => 'date',
    9 => 'dom',
    10 => 'exif',
    11 => 'fileinfo',
    12 => 'filter',
    13 => 'gd',
    14 => 'hash',
    15 => 'iconv',
    16 => 'intl',
    17 => 'json',
    18 => 'libxml',
    19 => 'mbstring',
    20 => 'mysqli',
    21 => 'mysqlnd',
    22 => 'openssl',
    23 => 'pcntl',
    24 => 'pcre',
    25 => 'pdo_mysql',
    26 => 'pdo_pgsql',
    27 => 'pdo_sqlite',
    28 => 'pgsql',
    29 => 'posix',
    30 => 'random',
    31 => 'readline',
    32 => 'session',
    33 => 'sqlite3',
    34 => 'standard',
    35 => 'tokenizer',
    36 => 'xml',
    37 => 'xmlreader',
    38 => 'xmlwriter',
    39 => 'zip',
    40 => 'zlib',
  ),
  'stubFiles' => 
  array (
  ),
  'level' => '8',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
); },
	'locallyIgnoredErrorsCallback' => static function (): array { return array (
); },
	'linesToIgnore' => array (
),
	'unmatchedLineIgnores' => array (
),
	'collectedDataCallback' => static function (): array { return array (
  '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/app/Models/User.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\User',
        1 => 'casts',
        2 => 'App\\Models\\User',
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
      1 => 
      array (
        0 => 'Illuminate\\Notifications\\Notifiable',
      ),
    ),
  ),
  '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/database/seeders/DatabaseSeeder.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
        ),
        1 => 'create',
        2 => 22,
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Console\\Seeds\\WithoutModelEvents',
      ),
    ),
  ),
  '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/routes/web.php' => 
  array (
    'Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector' => 
    array (
      0 => 'welcome',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 7,
      ),
    ),
  ),
); },
	'dependencies' => array (
  '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/app/Http/Controllers/Controller.php' => 
  array (
    'fileHash' => '75cadca8afa5982965d1ac316df3c693271b4902',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/app/Models/User.php' => 
  array (
    'fileHash' => '225de603139c9bba532eadc9656fa22bc94908f4',
    'dependentFiles' => 
    array (
      0 => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/database/factories/UserFactory.php',
      1 => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/database/seeders/DatabaseSeeder.php',
    ),
  ),
  '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/app/Providers/AppServiceProvider.php' => 
  array (
    'fileHash' => 'ab7a9652faa1cff455fc4073292ac45047877864',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/database/factories/UserFactory.php' => 
  array (
    'fileHash' => 'da81427e8ac3a01f4a360471634d4f8f4eb0112c',
    'dependentFiles' => 
    array (
      0 => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/app/Models/User.php',
      1 => '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/database/seeders/DatabaseSeeder.php',
    ),
  ),
  '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/database/migrations/0001_01_01_000000_create_users_table.php' => 
  array (
    'fileHash' => '8c6add1bda696e5cba49a16a19d470347d73bbca',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/database/migrations/0001_01_01_000001_create_cache_table.php' => 
  array (
    'fileHash' => '0f17c97e35fc52aaff6f419a3dd48b2c79c2bbf9',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/database/migrations/0001_01_01_000002_create_jobs_table.php' => 
  array (
    'fileHash' => 'e02b7c7f1326d9a116569003c073bd460608270d',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/database/seeders/DatabaseSeeder.php' => 
  array (
    'fileHash' => '058c98fa56728194bf12ed1d9e8f766d855f684f',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/routes/console.php' => 
  array (
    'fileHash' => '095d22dee22d536c8d0bdc3e13c3398a645611e3',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/routes/web.php' => 
  array (
    'fileHash' => 'e023f077a68d8575f386aba51be342860929c632',
    'dependentFiles' => 
    array (
    ),
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/app/Http/Controllers/Controller.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Controller',
       'phpDoc' => NULL,
       'abstract' => true,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/app/Models/User.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\User',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Foundation\\Auth\\User',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        1 => 'Illuminate\\Notifications\\Notifiable',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'hidden',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/app/Providers/AppServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\AppServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Support\\ServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Bootstrap any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/database/factories/UserFactory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Factories\\UserFactory',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @extends \\Illuminate\\Database\\Eloquent\\Factories\\Factory<\\App\\Models\\User>
 */',
         'namespace' => 'Database\\Factories',
         'uses' => 
        array (
          'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
          'hash' => 'Illuminate\\Support\\Facades\\Hash',
          'str' => 'Illuminate\\Support\\Str',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'password',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The current password being used by the factory.
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => '?string',
           'public' => false,
           'private' => false,
           'static' => true,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'definition',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Define the model\'s default state.
     *
     * @return array<string, mixed>
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'unverified',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Indicate that the model\'s email address should be unverified.
     */',
             'namespace' => 'Database\\Factories',
             'uses' => 
            array (
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'static',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/ignacio/StudySpace/LARAVEL-PHP/Laracast/API_proyects/storage-api/database/seeders/DatabaseSeeder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Database\\Seeders\\DatabaseSeeder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Database\\Seeder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Console\\Seeds\\WithoutModelEvents',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Seed the application\'s database.
     */',
             'namespace' => 'Database\\Seeders',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'withoutmodelevents' => 'Illuminate\\Database\\Console\\Seeds\\WithoutModelEvents',
              'seeder' => 'Illuminate\\Database\\Seeder',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
); },
];
