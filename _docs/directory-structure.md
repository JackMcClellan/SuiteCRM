Directory structure:
└── jackmcclellan-suitecrm/
    ├── README.md
    ├── campaign_tracker.php
    ├── codacy.yml
    ├── codeception.dist.yml
    ├── composer.json
    ├── composer.lock
    ├── cron.php
    ├── crossdomain.xml
    ├── deprecated.php
    ├── dictionary.php
    ├── download.php
    ├── emailmandelivery.php
    ├── export.php
    ├── files.md5
    ├── HandleAjaxCall.php
    ├── ical_server.php
    ├── index.php
    ├── install.php
    ├── json_server.php
    ├── LICENSE.txt
    ├── log_file_restricted.html
    ├── maintenance.php
    ├── pdf.php
    ├── php_version.php
    ├── phpcs.xml
    ├── RoboFile.php
    ├── robots.txt
    ├── run_job.php
    ├── soap.php
    ├── sugar_version.json
    ├── sugar_version.php
    ├── SugarSecurity.php
    ├── suitecrm_version.php
    ├── travis.php.ini
    ├── TreeData.php
    ├── vcal_server.php
    ├── vCard.php
    ├── .codecov.yml
    ├── .env.dist
    ├── .php_cs.dist
    ├── .travis.yml
    ├── Api/
    │   ├── index.php
    │   ├── Core/
    │   │   ├── app.php
    │   │   ├── Config/
    │   │   │   ├── ApiConfig.php
    │   │   │   └── slim.php
    │   │   ├── Loader/
    │   │   │   ├── ContainerLoader.php
    │   │   │   ├── CustomLoader.php
    │   │   │   └── RouteLoader.php
    │   │   └── Resolver/
    │   │       └── ConfigResolver.php
    │   ├── docs/
    │   │   ├── postman/
    │   │   │   └── SalesAgility.postman_collection.json
    │   │   └── swagger/
    │   │       └── swagger.json
    │   └── V8/
    │       ├── BeanDecorator/
    │       │   ├── BeanListRequest.php
    │       │   ├── BeanListResponse.php
    │       │   └── BeanManager.php
    │       ├── Config/
    │       │   ├── routes.php
    │       │   ├── services.php
    │       │   └── services/
    │       │       ├── beanAliases.php
    │       │       ├── controllers.php
    │       │       ├── factories.php
    │       │       ├── globals.php
    │       │       ├── helpers.php
    │       │       ├── middlewares.php
    │       │       ├── params.php
    │       │       ├── services.php
    │       │       └── validators.php
    │       ├── Controller/
    │       │   ├── BaseController.php
    │       │   ├── ListViewController.php
    │       │   ├── ListViewSearchController.php
    │       │   ├── LogoutController.php
    │       │   ├── MetaController.php
    │       │   ├── ModuleController.php
    │       │   ├── RelationshipController.php
    │       │   ├── UserController.php
    │       │   ├── UserPreferencesController.php
    │       │   └── InvocationStrategy/
    │       │       └── SuiteInvocationStrategy.php
    │       ├── Factory/
    │       │   ├── ParamsMiddlewareFactory.php
    │       │   └── ValidatorFactory.php
    │       ├── Helper/
    │       │   ├── ModuleListProvider.php
    │       │   ├── OsHelper.php
    │       │   └── VarDefHelper.php
    │       ├── JsonApi/
    │       │   ├── Helper/
    │       │   │   ├── AttributeObjectHelper.php
    │       │   │   ├── PaginationObjectHelper.php
    │       │   │   └── RelationshipObjectHelper.php
    │       │   ├── Repository/
    │       │   │   ├── Filter.php
    │       │   │   └── Sort.php
    │       │   └── Response/
    │       │       ├── AttributeResponse.php
    │       │       ├── DataResponse.php
    │       │       ├── DocumentResponse.php
    │       │       ├── ErrorResponse.php
    │       │       ├── LinksResponse.php
    │       │       ├── MetaResponse.php
    │       │       ├── PaginationResponse.php
    │       │       └── RelationshipResponse.php
    │       ├── Middleware/
    │       │   └── ParamsMiddleware.php
    │       ├── OAuth2/
    │       │   ├── Entity/
    │       │   │   ├── AccessTokenEntity.php
    │       │   │   ├── ClientEntity.php
    │       │   │   ├── RefreshTokenEntity.php
    │       │   │   └── UserEntity.php
    │       │   └── Repository/
    │       │       ├── AccessTokenRepository.php
    │       │       ├── ClientRepository.php
    │       │       ├── RefreshTokenRepository.php
    │       │       ├── ScopeRepository.php
    │       │       └── UserRepository.php
    │       ├── Param/
    │       │   ├── BaseParam.php
    │       │   ├── CreateModuleDataParams.php
    │       │   ├── CreateModuleParams.php
    │       │   ├── CreateRelationshipByLinkParams.php
    │       │   ├── CreateRelationshipParams.php
    │       │   ├── DeleteModuleParams.php
    │       │   ├── DeleteRelationshipParams.php
    │       │   ├── GetFieldListParams.php
    │       │   ├── GetModuleParams.php
    │       │   ├── GetModulesParams.php
    │       │   ├── GetRelationshipDataParams.php
    │       │   ├── GetRelationshipParams.php
    │       │   ├── GetUserPreferencesParams.php
    │       │   ├── ListViewColumnsParams.php
    │       │   ├── ListViewSearchParams.php
    │       │   ├── PageParams.php
    │       │   ├── UpdateModuleDataParams.php
    │       │   ├── UpdateModuleParams.php
    │       │   └── Options/
    │       │       ├── Attributes.php
    │       │       ├── BaseOption.php
    │       │       ├── Fields.php
    │       │       ├── Filter.php
    │       │       ├── Id.php
    │       │       ├── LinkFieldName.php
    │       │       ├── ModuleName.php
    │       │       ├── Page.php
    │       │       ├── Sort.php
    │       │       └── Type.php
    │       └── Service/
    │           ├── ListViewSearchService.php
    │           ├── ListViewService.php
    │           ├── LogoutService.php
    │           ├── MetaService.php
    │           ├── ModuleService.php
    │           ├── RelationshipService.php
    │           ├── UserPreferencesService.php
    │           └── UserService.php
    ├── custom/
    │   ├── index.html
    │   ├── Extension/
    │   │   └── application/
    │   │       └── Ext/
    │   │           └── LogicHooks/
    │   │               └── AOW_WorkFlow_Hook.php
    │   └── modules/
    │       └── unified_search_modules_display.php
    ├── data/
    │   ├── BeanFactory.php
    │   ├── Link.php
    │   ├── Link2.php
    │   ├── SugarBean.php
    │   └── Relationships/
    │       ├── EmailAddressRelationship.php
    │       ├── M2MRelationship.php
    │       ├── One2MBeanRelationship.php
    │       ├── One2MRelationship.php
    │       ├── One2OneBeanRelationship.php
    │       ├── One2OneRelationship.php
    │       ├── RelationshipFactory.php
    │       └── SugarRelationship.php
    ├── include/
    │   ├── clean.php
    │   ├── CleanCSV.php
    │   ├── DatabaseTransactions.php
    │   ├── dir_inc.php
    │   ├── EmailInterface.php
    │   ├── entryPoint.php
    │   ├── EntryPointConfirmOptIn.tpl
    │   ├── entryPointConfirmOptInConnector.php
    │   ├── EntryPointConfirmOptInHandler.php
    │   ├── ErrorMessage.php
    │   ├── ErrorMessageException.php
    │   ├── export_utils.php
    │   ├── formbase.php
    │   ├── get_form_header.tpl
    │   ├── globalControlLinks.php
    │   ├── HTMLPurifierFilterXmp.php
    │   ├── HTMLPurifierURISchemeCid.php
    │   ├── HtmlSanitizer.php
    │   ├── Imap.php
    │   ├── ImapInterface.php
    │   ├── JSON.php
    │   ├── json_config.php
    │   ├── JsonApiErrorObject.php
    │   ├── LangException.php
    │   ├── LangExceptionInterface.php
    │   ├── LangText.php
    │   ├── MassUpdate.php
    │   ├── modules.php
    │   ├── parsecsv.lib.php
    │   ├── php-sql-parser.php
    │   ├── QuickSearchDefaults.php
    │   ├── RefreshDatabase.php
    │   ├── StateCheckerDirectoryIterator.php
    │   ├── Sugar_Smarty.php
    │   ├── SugarDateTime.php
    │   ├── SugarHttpClient.php
    │   ├── SugarOauth.php
    │   ├── SugarOAuthServer.php
    │   ├── SugarPHPMailer.php
    │   ├── SugarSQLValidate.php
    │   ├── SugarTinyMCE.php
    │   ├── SuiteMozaik.php
    │   ├── tabConfig.php
    │   ├── tabs.php
    │   ├── tabs.tpl
    │   ├── TestCaseAbstract.php
    │   ├── TimeDate.php
    │   ├── upload_file.php
    │   ├── UploadFile.php
    │   ├── UploadMultipleFiles.php
    │   ├── UploadStream.php
    │   ├── URIFilter.php
    │   ├── utils.php
    │   ├── vCard.php
    │   ├── Zend_Oauth_Provider.php
    │   ├── connectors/
    │   │   ├── component.php
    │   │   ├── ConnectorFactory.php
    │   │   ├── filters/
    │   │   │   ├── FilterFactory.php
    │   │   │   └── default/
    │   │   │       └── filter.php
    │   │   ├── formatters/
    │   │   │   ├── FormatterFactory.php
    │   │   │   ├── default/
    │   │   │   │   ├── company_detail.js
    │   │   │   │   └── formatter.php
    │   │   │   └── ext/
    │   │   │       ├── rest/
    │   │   │       │   └── tpls/
    │   │   │       │       └── default.tpl
    │   │   │       └── soap/
    │   │   │           └── tpls/
    │   │   │               └── default.tpl
    │   │   ├── sources/
    │   │   │   ├── SourceFactory.php
    │   │   │   ├── default/
    │   │   │   │   └── source.php
    │   │   │   ├── ext/
    │   │   │   │   ├── eapm/
    │   │   │   │   │   └── eapm.php
    │   │   │   │   ├── rest/
    │   │   │   │   │   └── rest.php
    │   │   │   │   └── soap/
    │   │   │   │       └── soap.php
    │   │   │   └── loc/
    │   │   │       └── xml.php
    │   │   └── utils/
    │   │       ├── ConnectorHtmlHelper.php
    │   │       ├── ConnectorHtmlHelperFactory.php
    │   │       └── ConnectorUtils.php
    │   ├── contextMenus/
    │   │   ├── contextMenu.php
    │   │   └── menuDefs/
    │   │       ├── sugarAccount.php
    │   │       ├── sugarObject.php
    │   │       └── sugarPerson.php
    │   ├── controller/
    │   │   └── Controller.php
    │   ├── Dashlets/
    │   │   ├── Dashlet.php
    │   │   ├── DashletCacheBuilder.php
    │   │   ├── DashletFooter.tpl
    │   │   ├── DashletGeneric.php
    │   │   ├── DashletGenericAutoRefresh.tpl
    │   │   ├── DashletGenericAutoRefreshDynamic.tpl
    │   │   ├── DashletGenericChart.php
    │   │   ├── DashletGenericChartConfigure.tpl
    │   │   ├── DashletGenericConfigure.tpl
    │   │   ├── DashletGenericDisplay.tpl
    │   │   ├── DashletHeader.tpl
    │   │   └── DashletRssFeedTitle.php
    │   ├── database/
    │   │   ├── DBManager.php
    │   │   ├── DBManagerFactory.php
    │   │   ├── FreeTDSManager.php
    │   │   ├── MssqlManager.php
    │   │   ├── MysqliManager.php
    │   │   ├── MysqlManager.php
    │   │   └── SqlsrvManager.php
    │   ├── DetailView/
    │   │   ├── DetailView.php
    │   │   ├── DetailView.tpl
    │   │   ├── DetailView2.php
    │   │   ├── footer.tpl
    │   │   └── header.tpl
    │   ├── EditView/
    │   │   ├── EditView.php
    │   │   ├── EditView.tpl
    │   │   ├── EditView2.php
    │   │   ├── footer.tpl
    │   │   ├── header.tpl
    │   │   ├── Panels.js
    │   │   ├── PopupQuickCreate.php
    │   │   ├── QuickCreate.php
    │   │   ├── QuickCreate.tpl
    │   │   ├── SecurityGroups.tpl
    │   │   ├── SubpanelQuickCreate.php
    │   │   ├── SubpanelQuickEdit.php
    │   │   ├── SugarVCR.php
    │   │   └── SugarVCR.tpl
    │   ├── Exceptions/
    │   │   ├── SugarControllerException.php
    │   │   └── SuiteException.php
    │   ├── externalAPI/
    │   │   ├── cmis_repository_wrapper.php
    │   │   ├── ExternalAPIFactory.php
    │   │   └── Base/
    │   │       ├── ExternalAPIBase.php
    │   │       ├── ExternalAPIPlugin.php
    │   │       ├── ExternalOAuthAPIPlugin.php
    │   │       ├── OAuthPluginBase.php
    │   │       ├── WebDocument.php
    │   │       ├── WebFeed.php
    │   │       └── WebMeeting.php
    │   ├── fonts/
    │   │   ├── Courier-Bold.afm
    │   │   ├── Courier-BoldOblique.afm
    │   │   ├── Courier-Oblique.afm
    │   │   ├── Courier.afm
    │   │   ├── Helvetica-Bold.afm
    │   │   ├── Helvetica-BoldOblique.afm
    │   │   ├── Helvetica-Oblique.afm
    │   │   ├── Helvetica.afm
    │   │   ├── License.html
    │   │   ├── Times-Bold.afm
    │   │   ├── Times-BoldItalic.afm
    │   │   ├── Times-Italic.afm
    │   │   └── Times-Roman.afm
    │   ├── generic/
    │   │   ├── DeleteRelationship.php
    │   │   ├── LayoutManager.php
    │   │   ├── Save2.php
    │   │   └── SugarWidgets/
    │   │       ├── SugarWidget.php
    │   │       ├── SugarWidgetField.php
    │   │       ├── SugarWidgetFieldbool.php
    │   │       ├── SugarWidgetFieldchar.php
    │   │       ├── SugarWidgetFieldCronSchedule.php
    │   │       ├── SugarWidgetFieldcurrency.php
    │   │       ├── SugarWidgetFieldcurrency_id.php
    │   │       ├── SugarWidgetFielddate.php
    │   │       ├── SugarWidgetFielddatepicker.php
    │   │       ├── SugarWidgetFielddatetime.php
    │   │       ├── SugarWidgetFielddatetimecombo.php
    │   │       ├── SugarWidgetFielddecimal.php
    │   │       ├── SugarWidgetFielddouble.php
    │   │       ├── SugarWidgetFielddynamicenum.php
    │   │       ├── SugarWidgetFieldemail.php
    │   │       ├── SugarWidgetFieldenum.php
    │   │       ├── SugarWidgetFieldfile.php
    │   │       ├── SugarWidgetFieldfloat.php
    │   │       ├── SugarWidgetFieldfullname.php
    │   │       ├── SugarWidgetFieldid.php
    │   │       ├── SugarWidgetFieldimage.php
    │   │       ├── SugarWidgetFieldint.php
    │   │       ├── SugarWidgetFieldlong.php
    │   │       ├── SugarWidgetFieldlongtext.php
    │   │       ├── SugarWidgetFieldmultienum.php
    │   │       ├── SugarWidgetFieldname.php
    │   │       ├── SugarWidgetFieldnum.php
    │   │       ├── SugarWidgetFieldparent_type.php
    │   │       ├── SugarWidgetFieldphone.php
    │   │       ├── SugarWidgetFieldradioenum.php
    │   │       ├── SugarWidgetFieldrelate.php
    │   │       ├── SugarWidgetFieldsingleenum.php
    │   │       ├── SugarWidgetFieldtext.php
    │   │       ├── SugarWidgetFieldtime.php
    │   │       ├── SugarWidgetFieldurl.php
    │   │       ├── SugarWidgetFielduser_name.php
    │   │       ├── SugarWidgetFieldvarchar.php
    │   │       ├── SugarWidgetFieldwysiwyg.php
    │   │       ├── SugarWidgetReportField.php
    │   │       ├── SugarWidgetSubPanelActivitiesStatusField.php
    │   │       ├── SugarWidgetSubPanelCheck.php
    │   │       ├── SugarWidgetSubPanelCloseButton.php
    │   │       ├── SugarWidgetSubPanelConcat.php
    │   │       ├── SugarWidgetSubPanelDelegatesSelectButton.php
    │   │       ├── SugarWidgetSubPanelDeleteButton.php
    │   │       ├── SugarWidgetSubPanelDetailViewLink.php
    │   │       ├── SugarWidgetSubPanelEditButton.php
    │   │       ├── SugarWidgetSubPanelEditRoleButton.php
    │   │       ├── SugarWidgetSubPanelEditSecurityGroupUserButton.php
    │   │       ├── SugarWidgetSubPanelEmailLink.php
    │   │       ├── SugarWidgetSubPanelGetLatestButton.php
    │   │       ├── SugarWidgetSubPanelIcon.php
    │   │       ├── SugarWidgetSubPanelLoadSignedButton.php
    │   │       ├── SugarWidgetSubPanelManageAcceptancesButton.php
    │   │       ├── SugarWidgetSubPanelManageDelegatesButton.php
    │   │       ├── SugarWidgetSubPanelRelFieldEditButton.php
    │   │       ├── SugarWidgetSubPanelRemoveButton.php
    │   │       ├── SugarWidgetSubPanelRemoveButtonAccount.php
    │   │       ├── SugarWidgetSubPanelRemoveButtonMeetings.php
    │   │       ├── SugarWidgetSubPanelRemoveButtonProjects.php
    │   │       ├── SugarWidgetSubPanelSelectAllButton.php
    │   │       ├── SugarWidgetSubPanelSendInvitesButton.php
    │   │       ├── SugarWidgetSubPanelTopArchiveEmailButton.php
    │   │       ├── SugarWidgetSubPanelTopButton.php
    │   │       ├── SugarWidgetSubPanelTopButton_c.php
    │   │       ├── SugarWidgetSubPanelTopButtonQuickCreate.php
    │   │       ├── SugarWidgetSubPanelTopComposeEmailButton.php
    │   │       ├── SugarWidgetSubPanelTopCreateAccountNameButton.php
    │   │       ├── SugarWidgetSubPanelTopCreateCampaignLogEntryButton.php
    │   │       ├── SugarWidgetSubPanelTopCreateCampaignMarketingEmailButton.php
    │   │       ├── SugarWidgetSubPanelTopCreateLeadNameButton.php
    │   │       ├── SugarWidgetSubPanelTopCreateNoteButton.php
    │   │       ├── SugarWidgetSubPanelTopCreateTaskButton.php
    │   │       ├── SugarWidgetSubPanelTopFilterButton.php
    │   │       ├── SugarWidgetSubPanelTopMessage.php
    │   │       ├── SugarWidgetSubPanelTopScheduleCallButton.php
    │   │       ├── SugarWidgetSubPanelTopScheduleMeetingButton.php
    │   │       ├── SugarWidgetSubPanelTopSelectAccountButton.php
    │   │       ├── SugarWidgetSubPanelTopSelectButton.php
    │   │       ├── SugarWidgetSubPanelTopSelectContactsButton.php
    │   │       ├── SugarWidgetSubPanelTopSelectUsersButton.php
    │   │       └── SugarWidgetSubPanelTopSummaryButton.php
    │   ├── GoogleSync/
    │   │   ├── GoogleSync.php
    │   │   ├── GoogleSyncBase.php
    │   │   ├── GoogleSyncExceptions.php
    │   │   └── GoogleSyncHelper.php
    │   ├── GroupedTabs/
    │   │   └── GroupedTabStructure.php
    │   ├── HTTP_WebDAV_Server/
    │   │   ├── README
    │   │   ├── dav.txt
    │   │   ├── license.txt
    │   │   ├── Server.php
    │   │   └── Tools/
    │   │       ├── _parse_lockinfo.php
    │   │       ├── _parse_propfind.php
    │   │       └── _parse_proppatch.php
    │   ├── images/
    │   │   └── SugarPlanet.swf
    │   ├── Imap/
    │   │   ├── Imap2Handler.php
    │   │   ├── ImapHandler.php
    │   │   ├── ImapHandlerException.php
    │   │   ├── ImapHandlerFactory.php
    │   │   ├── ImapHandlerFake.php
    │   │   ├── ImapHandlerFakeCalls.php
    │   │   ├── ImapHandlerFakeData.php
    │   │   ├── ImapHandlerInterface.php
    │   │   ├── ImapTestSettingsEntry.php
    │   │   └── ImapTestSettingsEntryHandler.php
    │   ├── InlineEditing/
    │   │   ├── inlineEditing.js
    │   │   └── InlineEditing.php
    │   ├── javascript/
    │   │   ├── ajaxUI.js
    │   │   ├── alerts.js
    │   │   ├── bindWithDelay.js
    │   │   ├── calendar.js
    │   │   ├── checkbox.js
    │   │   ├── cookie.js
    │   │   ├── dashlets.js
    │   │   ├── EmailsComposeViewModal.js
    │   │   ├── getYUIComboFile.php
    │   │   ├── importWizard.js
    │   │   ├── include.js
    │   │   ├── iscroll.js
    │   │   ├── javascript.php
    │   │   ├── jsAlerts.php
    │   │   ├── jsclass_async.js
    │   │   ├── jsclass_base.js
    │   │   ├── menu.js
    │   │   ├── message-box.js
    │   │   ├── popup_helper.js
    │   │   ├── popup_parent_helper.js
    │   │   ├── quickCompose.js
    │   │   ├── quicksearch.js
    │   │   ├── report_additionals.js
    │   │   ├── sugar_3.js
    │   │   ├── sugar_connection_event_listener.js
    │   │   ├── sugar_yui_overrides.js
    │   │   ├── tour.js
    │   │   ├── jquery/
    │   │   │   ├── footable.js
    │   │   │   ├── jquery-min.js
    │   │   │   ├── jquery-ui-min.js
    │   │   │   ├── jquery.browser.js
    │   │   │   ├── jquery.cookie.js
    │   │   │   ├── jquery.dialogTitle.js
    │   │   │   ├── jquery.effects.custombounce.js
    │   │   │   ├── jquery.elementReady.js
    │   │   │   ├── jquery.highLight.js
    │   │   │   ├── jquery.hotkeys.js
    │   │   │   ├── jquery.hoverIntent.js
    │   │   │   ├── jquery.hoverscroll.js
    │   │   │   ├── jquery.json-2.3.js
    │   │   │   ├── jquery.popoverext.js
    │   │   │   ├── jquery.showLoading.js
    │   │   │   ├── jquery.sugarMenu.js
    │   │   │   ├── jquery.superfish.js
    │   │   │   ├── jquery.tipTip.js
    │   │   │   ├── markitup/
    │   │   │   │   ├── jquery.markitup.js
    │   │   │   │   ├── sets/
    │   │   │   │   │   └── default/
    │   │   │   │   │       ├── set.js
    │   │   │   │   │       └── style.css
    │   │   │   │   ├── skins/
    │   │   │   │   │   └── simple/
    │   │   │   │   │       └── style.css
    │   │   │   │   └── templates/
    │   │   │   │       ├── preview.css
    │   │   │   │       └── preview.html
    │   │   │   └── themes/
    │   │   │       └── base/
    │   │   │           ├── jquery-ui.css
    │   │   │           ├── jquery-ui.structure.css
    │   │   │           ├── jquery-ui.theme.css
    │   │   │           └── jquery.ui.all.css
    │   │   ├── jstree/
    │   │   │   ├── README.md
    │   │   │   └── LICENSE-MIT
    │   │   ├── mozaik/
    │   │   │   ├── README.md
    │   │   │   ├── jquery.mozaik.css
    │   │   │   ├── jquery.mozaik.js
    │   │   │   ├── template.html
    │   │   │   ├── colorpicker/
    │   │   │   │   ├── index.html
    │   │   │   │   ├── css/
    │   │   │   │   │   ├── colorpicker.css
    │   │   │   │   │   └── layout.css
    │   │   │   │   └── js/
    │   │   │   │       ├── colorpicker.js
    │   │   │   │       ├── eye.js
    │   │   │   │       ├── jquery.js
    │   │   │   │       ├── layout.js
    │   │   │   │       └── utils.js
    │   │   │   └── tpls/
    │   │   │       └── default/
    │   │   │           ├── content1.html
    │   │   │           ├── content2.html
    │   │   │           ├── content3.html
    │   │   │           ├── footer.html
    │   │   │           ├── headline.html
    │   │   │           ├── image1left.html
    │   │   │           ├── image1right.html
    │   │   │           ├── image2.html
    │   │   │           ├── image3.html
    │   │   │           └── styles/
    │   │   │               └── default.css
    │   │   ├── phpjs/
    │   │   │   ├── get_html_translation_table.js
    │   │   │   ├── html_entity_decode.js
    │   │   │   ├── htmlentities.js
    │   │   │   └── license.js
    │   │   ├── pivottable/
    │   │   │   └── pivot.css
    │   │   ├── sugarwidgets/
    │   │   │   ├── SugarYUILoader.js
    │   │   │   └── SugarYUIWidgets.js
    │   │   ├── suitespots/
    │   │   │   └── suitespots.js
    │   │   ├── tiny_mce/
    │   │   │   ├── license.txt
    │   │   │   ├── tiny_mce.js
    │   │   │   ├── tiny_mce_popup.js
    │   │   │   ├── tiny_mce_src.js
    │   │   │   ├── langs/
    │   │   │   │   └── en.js
    │   │   │   ├── plugins/
    │   │   │   │   ├── advhr/
    │   │   │   │   │   ├── editor_plugin.js
    │   │   │   │   │   ├── editor_plugin_src.js
    │   │   │   │   │   ├── rule.htm
    │   │   │   │   │   ├── css/
    │   │   │   │   │   │   └── advhr.css
    │   │   │   │   │   ├── js/
    │   │   │   │   │   │   └── rule.js
    │   │   │   │   │   └── langs/
    │   │   │   │   │       └── en_dlg.js
    │   │   │   │   ├── advimage/
    │   │   │   │   │   ├── editor_plugin.js
    │   │   │   │   │   ├── editor_plugin_src.js
    │   │   │   │   │   ├── image.htm
    │   │   │   │   │   ├── css/
    │   │   │   │   │   │   └── advimage.css
    │   │   │   │   │   ├── js/
    │   │   │   │   │   │   └── image.js
    │   │   │   │   │   └── langs/
    │   │   │   │   │       └── en_dlg.js
    │   │   │   │   ├── advlink/
    │   │   │   │   │   ├── editor_plugin.js
    │   │   │   │   │   ├── editor_plugin_src.js
    │   │   │   │   │   ├── link.htm
    │   │   │   │   │   ├── css/
    │   │   │   │   │   │   └── advlink.css
    │   │   │   │   │   ├── js/
    │   │   │   │   │   │   └── advlink.js
    │   │   │   │   │   └── langs/
    │   │   │   │   │       └── en_dlg.js
    │   │   │   │   ├── advlist/
    │   │   │   │   │   ├── editor_plugin.js
    │   │   │   │   │   └── editor_plugin_src.js
    │   │   │   │   ├── autolink/
    │   │   │   │   │   ├── editor_plugin.js
    │   │   │   │   │   └── editor_plugin_src.js
    │   │   │   │   ├── autoresize/
    │   │   │   │   │   ├── editor_plugin.js
    │   │   │   │   │   └── editor_plugin_src.js
    │   │   │   │   ├── autosave/
    │   │   │   │   │   ├── editor_plugin.js
    │   │   │   │   │   └── editor_plugin_src.js
    │   │   │   │   ├── bbcode/
    │   │   │   │   │   ├── editor_plugin.js
    │   │   │   │   │   └── editor_plugin_src.js
    │   │   │   │   ├── contextmenu/
    │   │   │   │   │   ├── editor_plugin.js
    │   │   │   │   │   └── editor_plugin_src.js
    │   │   │   │   ├── directionality/
    │   │   │   │   │   ├── editor_plugin.js
    │   │   │   │   │   └── editor_plugin_src.js
    │   │   │   │   ├── emotions/
    │   │   │   │   │   ├── editor_plugin.js
    │   │   │   │   │   ├── editor_plugin_src.js
    │   │   │   │   │   ├── emotions.htm
    │   │   │   │   │   ├── js/
    │   │   │   │   │   │   └── emotions.js
    │   │   │   │   │   └── langs/
    │   │   │   │   │       └── en_dlg.js
    │   │   │   │   ├── example/
    │   │   │   │   │   ├── dialog.htm
    │   │   │   │   │   ├── editor_plugin.js
    │   │   │   │   │   ├── editor_plugin_src.js
    │   │   │   │   │   ├── js/
    │   │   │   │   │   │   └── dialog.js
    │   │   │   │   │   └── langs/
    │   │   │   │   │       ├── en.js
    │   │   │   │   │       └── en_dlg.js
    │   │   │   │   ├── example_dependency/
    │   │   │   │   │   ├── editor_plugin.js
    │   │   │   │   │   └── editor_plugin_src.js
    │   │   │   │   ├── fullpage/
    │   │   │   │   │   ├── editor_plugin.js
    │   │   │   │   │   ├── editor_plugin_src.js
    │   │   │   │   │   ├── fullpage.htm
    │   │   │   │   │   ├── css/
    │   │   │   │   │   │   └── fullpage.css
    │   │   │   │   │   ├── js/
    │   │   │   │   │   │   └── fullpage.js
    │   │   │   │   │   └── langs/
    │   │   │   │   │       └── en_dlg.js
    │   │   │   │   ├── fullscreen/
    │   │   │   │   │   ├── editor_plugin.js
    │   │   │   │   │   ├── editor_plugin_src.js
    │   │   │   │   │   └── fullscreen.htm
    │   │   │   │   ├── iespell/
    │   │   │   │   │   ├── editor_plugin.js
    │   │   │   │   │   └── editor_plugin_src.js
    │   │   │   │   ├── inlinepopups/
    │   │   │   │   │   ├── editor_plugin.js
    │   │   │   │   │   ├── editor_plugin_src.js
    │   │   │   │   │   ├── template.htm
    │   │   │   │   │   └── skins/
    │   │   │   │   │       └── clearlooks2/
    │   │   │   │   │           └── window.css
    │   │   │   │   ├── insertdatetime/
    │   │   │   │   │   ├── editor_plugin.js
    │   │   │   │   │   └── editor_plugin_src.js
    │   │   │   │   ├── layer/
    │   │   │   │   │   ├── editor_plugin.js
    │   │   │   │   │   └── editor_plugin_src.js
    │   │   │   │   ├── legacyoutput/
    │   │   │   │   │   ├── editor_plugin.js
    │   │   │   │   │   └── editor_plugin_src.js
    │   │   │   │   ├── lists/
    │   │   │   │   │   ├── editor_plugin.js
    │   │   │   │   │   └── editor_plugin_src.js
    │   │   │   │   ├── media/
    │   │   │   │   │   ├── editor_plugin.js
    │   │   │   │   │   ├── editor_plugin_src.js
    │   │   │   │   │   ├── media.htm
    │   │   │   │   │   ├── moxieplayer.swf
    │   │   │   │   │   ├── css/
    │   │   │   │   │   │   └── media.css
    │   │   │   │   │   ├── js/
    │   │   │   │   │   │   ├── embed.js
    │   │   │   │   │   │   └── media.js
    │   │   │   │   │   └── langs/
    │   │   │   │   │       └── en_dlg.js
    │   │   │   │   ├── nonbreaking/
    │   │   │   │   │   ├── editor_plugin.js
    │   │   │   │   │   └── editor_plugin_src.js
    │   │   │   │   ├── noneditable/
    │   │   │   │   │   ├── editor_plugin.js
    │   │   │   │   │   └── editor_plugin_src.js
    │   │   │   │   ├── pagebreak/
    │   │   │   │   │   ├── editor_plugin.js
    │   │   │   │   │   └── editor_plugin_src.js
    │   │   │   │   ├── paste/
    │   │   │   │   │   ├── editor_plugin.js
    │   │   │   │   │   ├── editor_plugin_src.js
    │   │   │   │   │   ├── pastetext.htm
    │   │   │   │   │   ├── pasteword.htm
    │   │   │   │   │   ├── js/
    │   │   │   │   │   │   ├── pastetext.js
    │   │   │   │   │   │   └── pasteword.js
    │   │   │   │   │   └── langs/
    │   │   │   │   │       └── en_dlg.js
    │   │   │   │   ├── preview/
    │   │   │   │   │   ├── editor_plugin.js
    │   │   │   │   │   ├── editor_plugin_src.js
    │   │   │   │   │   ├── example.html
    │   │   │   │   │   ├── preview.html
    │   │   │   │   │   └── jscripts/
    │   │   │   │   │       └── embed.js
    │   │   │   │   ├── print/
    │   │   │   │   │   ├── editor_plugin.js
    │   │   │   │   │   └── editor_plugin_src.js
    │   │   │   │   ├── save/
    │   │   │   │   │   ├── editor_plugin.js
    │   │   │   │   │   └── editor_plugin_src.js
    │   │   │   │   ├── searchreplace/
    │   │   │   │   │   ├── editor_plugin.js
    │   │   │   │   │   ├── editor_plugin_src.js
    │   │   │   │   │   ├── searchreplace.htm
    │   │   │   │   │   ├── css/
    │   │   │   │   │   │   └── searchreplace.css
    │   │   │   │   │   ├── js/
    │   │   │   │   │   │   └── searchreplace.js
    │   │   │   │   │   └── langs/
    │   │   │   │   │       └── en_dlg.js
    │   │   │   │   ├── spellchecker/
    │   │   │   │   │   ├── editor_plugin.js
    │   │   │   │   │   ├── editor_plugin_src.js
    │   │   │   │   │   └── css/
    │   │   │   │   │       └── content.css
    │   │   │   │   ├── style/
    │   │   │   │   │   ├── readme.txt
    │   │   │   │   │   ├── editor_plugin.js
    │   │   │   │   │   ├── editor_plugin_src.js
    │   │   │   │   │   ├── props.htm
    │   │   │   │   │   ├── css/
    │   │   │   │   │   │   └── props.css
    │   │   │   │   │   ├── js/
    │   │   │   │   │   │   └── props.js
    │   │   │   │   │   └── langs/
    │   │   │   │   │       └── en_dlg.js
    │   │   │   │   ├── tabfocus/
    │   │   │   │   │   ├── editor_plugin.js
    │   │   │   │   │   └── editor_plugin_src.js
    │   │   │   │   ├── table/
    │   │   │   │   │   ├── cell.htm
    │   │   │   │   │   ├── editor_plugin.js
    │   │   │   │   │   ├── editor_plugin_src.js
    │   │   │   │   │   ├── merge_cells.htm
    │   │   │   │   │   ├── row.htm
    │   │   │   │   │   ├── table.htm
    │   │   │   │   │   ├── css/
    │   │   │   │   │   │   ├── cell.css
    │   │   │   │   │   │   ├── row.css
    │   │   │   │   │   │   └── table.css
    │   │   │   │   │   ├── js/
    │   │   │   │   │   │   ├── cell.js
    │   │   │   │   │   │   ├── merge_cells.js
    │   │   │   │   │   │   ├── row.js
    │   │   │   │   │   │   └── table.js
    │   │   │   │   │   └── langs/
    │   │   │   │   │       └── en_dlg.js
    │   │   │   │   ├── template/
    │   │   │   │   │   ├── blank.htm
    │   │   │   │   │   ├── editor_plugin.js
    │   │   │   │   │   ├── editor_plugin_src.js
    │   │   │   │   │   ├── template.htm
    │   │   │   │   │   ├── css/
    │   │   │   │   │   │   └── template.css
    │   │   │   │   │   ├── js/
    │   │   │   │   │   │   └── template.js
    │   │   │   │   │   └── langs/
    │   │   │   │   │       └── en_dlg.js
    │   │   │   │   ├── visualblocks/
    │   │   │   │   │   ├── editor_plugin.js
    │   │   │   │   │   ├── editor_plugin_src.js
    │   │   │   │   │   └── css/
    │   │   │   │   │       └── visualblocks.css
    │   │   │   │   ├── visualchars/
    │   │   │   │   │   ├── editor_plugin.js
    │   │   │   │   │   └── editor_plugin_src.js
    │   │   │   │   ├── wordcount/
    │   │   │   │   │   ├── editor_plugin.js
    │   │   │   │   │   └── editor_plugin_src.js
    │   │   │   │   └── xhtmlxtras/
    │   │   │   │       ├── abbr.htm
    │   │   │   │       ├── acronym.htm
    │   │   │   │       ├── attributes.htm
    │   │   │   │       ├── cite.htm
    │   │   │   │       ├── del.htm
    │   │   │   │       ├── editor_plugin.js
    │   │   │   │       ├── editor_plugin_src.js
    │   │   │   │       ├── ins.htm
    │   │   │   │       ├── css/
    │   │   │   │       │   ├── attributes.css
    │   │   │   │       │   └── popup.css
    │   │   │   │       ├── js/
    │   │   │   │       │   ├── abbr.js
    │   │   │   │       │   ├── acronym.js
    │   │   │   │       │   ├── attributes.js
    │   │   │   │       │   ├── cite.js
    │   │   │   │       │   ├── del.js
    │   │   │   │       │   ├── element_common.js
    │   │   │   │       │   └── ins.js
    │   │   │   │       └── langs/
    │   │   │   │           └── en_dlg.js
    │   │   │   ├── themes/
    │   │   │   │   ├── advanced/
    │   │   │   │   │   ├── about.htm
    │   │   │   │   │   ├── anchor.htm
    │   │   │   │   │   ├── charmap.htm
    │   │   │   │   │   ├── color_picker.htm
    │   │   │   │   │   ├── editor_template.js
    │   │   │   │   │   ├── editor_template_src.js
    │   │   │   │   │   ├── image.htm
    │   │   │   │   │   ├── link.htm
    │   │   │   │   │   ├── shortcuts.htm
    │   │   │   │   │   ├── source_editor.htm
    │   │   │   │   │   ├── js/
    │   │   │   │   │   │   ├── about.js
    │   │   │   │   │   │   ├── anchor.js
    │   │   │   │   │   │   ├── charmap.js
    │   │   │   │   │   │   ├── color_picker.js
    │   │   │   │   │   │   ├── image.js
    │   │   │   │   │   │   ├── link.js
    │   │   │   │   │   │   └── source_editor.js
    │   │   │   │   │   ├── langs/
    │   │   │   │   │   │   ├── en.js
    │   │   │   │   │   │   └── en_dlg.js
    │   │   │   │   │   └── skins/
    │   │   │   │   │       ├── default/
    │   │   │   │   │       │   ├── content.css
    │   │   │   │   │       │   ├── dialog.css
    │   │   │   │   │       │   └── ui.css
    │   │   │   │   │       ├── highcontrast/
    │   │   │   │   │       │   ├── content.css
    │   │   │   │   │       │   ├── dialog.css
    │   │   │   │   │       │   └── ui.css
    │   │   │   │   │       └── o2k7/
    │   │   │   │   │           ├── content.css
    │   │   │   │   │           ├── dialog.css
    │   │   │   │   │           ├── ui.css
    │   │   │   │   │           ├── ui_black.css
    │   │   │   │   │           └── ui_silver.css
    │   │   │   │   └── simple/
    │   │   │   │       ├── editor_template.js
    │   │   │   │       ├── editor_template_src.js
    │   │   │   │       ├── langs/
    │   │   │   │       │   └── en.js
    │   │   │   │       └── skins/
    │   │   │   │           ├── default/
    │   │   │   │           │   ├── content.css
    │   │   │   │           │   └── ui.css
    │   │   │   │           └── o2k7/
    │   │   │   │               ├── content.css
    │   │   │   │               └── ui.css
    │   │   │   └── utils/
    │   │   │       ├── editable_selects.js
    │   │   │       ├── form_utils.js
    │   │   │       ├── mctabs.js
    │   │   │       └── validate.js
    │   │   └── yui/
    │   │       ├── README
    │   │       ├── LICENSE.txt
    │   │       └── ygDDList.js
    │   ├── language/
    │   │   ├── en_us.lang.php
    │   │   ├── en_us.notify_template.html
    │   │   ├── getJSLanguage.php
    │   │   └── jsLanguage.php
    │   ├── ListView/
    │   │   ├── ListView.php
    │   │   ├── ListViewBulkActionSendOptInLink.tpl
    │   │   ├── ListViewButtons.tpl
    │   │   ├── ListViewColumnsFilterDialog.tpl
    │   │   ├── ListViewColumnsFilterLink.tpl
    │   │   ├── ListViewData.php
    │   │   ├── ListViewDCMenu.tpl
    │   │   ├── ListViewDisplay.php
    │   │   ├── ListViewEval.tpl
    │   │   ├── ListViewFacade.php
    │   │   ├── ListViewGeneric.tpl
    │   │   ├── ListViewNoMassUpdate.tpl
    │   │   ├── ListViewPagination.tpl
    │   │   ├── ListViewSearchLink.tpl
    │   │   ├── ListViewSelectObjects.tpl
    │   │   ├── ListViewSmarty.php
    │   │   ├── ListViewSubPanel.php
    │   │   └── ListViewXTPL.php
    │   ├── Localization/
    │   │   └── Localization.php
    │   ├── MVC/
    │   │   ├── preDispatch.php
    │   │   ├── SugarApplication.php
    │   │   ├── SugarModule.php
    │   │   ├── Controller/
    │   │   │   ├── action_file_map.php
    │   │   │   ├── action_view_map.php
    │   │   │   ├── ControllerFactory.php
    │   │   │   ├── entry_point_registry.php
    │   │   │   ├── file_access_control_map.php
    │   │   │   └── SugarController.php
    │   │   └── View/
    │   │       ├── SugarView.php
    │   │       ├── ViewFactory.php
    │   │       ├── tpls/
    │   │       │   ├── displayLoginJS.tpl
    │   │       │   ├── favorites.tpl
    │   │       │   ├── Importvcard.tpl
    │   │       │   ├── modulelistmenu.tpl
    │   │       │   └── xsrf.tpl
    │   │       └── views/
    │   │           ├── view.ajax.php
    │   │           ├── view.ajaxui.php
    │   │           ├── view.classic.config.php
    │   │           ├── view.classic.php
    │   │           ├── view.config.php
    │   │           ├── view.detail.config.php
    │   │           ├── view.detail.php
    │   │           ├── view.edit.php
    │   │           ├── view.favorites.php
    │   │           ├── view.html.php
    │   │           ├── view.importvcard.php
    │   │           ├── view.importvcardsave.php
    │   │           ├── view.json.php
    │   │           ├── view.list.php
    │   │           ├── view.metadata.php
    │   │           ├── view.modulelistmenu.php
    │   │           ├── view.multiedit.php
    │   │           ├── view.noaccess.php
    │   │           ├── view.popup.php
    │   │           ├── view.quick.php
    │   │           ├── view.quickcreate.php
    │   │           ├── view.quickedit.php
    │   │           ├── view.serialized.php
    │   │           ├── view.sugarpdf.config.php
    │   │           ├── view.sugarpdf.php
    │   │           ├── view.vcard.php
    │   │           └── view.xml.php
    │   ├── MySugar/
    │   │   ├── dashboardstyle.css
    │   │   ├── MySugar.php
    │   │   ├── retrieve_dash_page.php
    │   │   ├── DashletsDialog/
    │   │   │   └── DashletsDialog.php
    │   │   ├── javascript/
    │   │   │   ├── AddRemoveDashboardPages.js
    │   │   │   ├── MySugar.js
    │   │   │   └── retrievePage.js
    │   │   └── tpls/
    │   │       ├── addDashletsDialog.tpl
    │   │       ├── chartDashletsSearchResults.tpl
    │   │       ├── dashletsSearchResults.tpl
    │   │       ├── MySugar.tpl
    │   │       ├── MySugar2.tpl
    │   │       ├── retrievePage.tpl
    │   │       └── retrieveReportCharts.tpl
    │   ├── nusoap/
    │   │   ├── changelog
    │   │   ├── class.nusoap_base.php
    │   │   ├── class.soap_fault.php
    │   │   ├── class.soap_parser.php
    │   │   ├── class.soap_server.php
    │   │   ├── class.soap_transport_http.php
    │   │   ├── class.soap_val.php
    │   │   ├── class.soapclient.php
    │   │   ├── class.wsdl.php
    │   │   ├── class.wsdlcache.php
    │   │   ├── class.xmlschema.php
    │   │   ├── license.txt
    │   │   ├── nusoap.php
    │   │   └── nusoapmime.php
    │   ├── OutboundEmail/
    │   │   └── OutboundEmail.php
    │   ├── Pear/
    │   │   └── Crypt_Blowfish/
    │   │       ├── Blowfish.php
    │   │       ├── license.txt
    │   │       └── Blowfish/
    │   │           └── DefaultKey.php
    │   ├── Popups/
    │   │   ├── Popup_picker.php
    │   │   ├── PopupSmarty.php
    │   │   └── tpls/
    │   │       ├── footer.tpl
    │   │       ├── header.tpl
    │   │       └── PopupGeneric.tpl
    │   ├── resource/
    │   │   ├── ResourceManager.php
    │   │   └── Observers/
    │   │       ├── ResourceObserver.php
    │   │       ├── SoapResourceObserver.php
    │   │       └── WebResourceObserver.php
    │   ├── SearchForm/
    │   │   ├── SearchForm.php
    │   │   ├── SearchForm2.php
    │   │   ├── SugarSpot.php
    │   │   └── tpls/
    │   │       ├── footer.tpl
    │   │       ├── footerPopup.tpl
    │   │       ├── header.tpl
    │   │       ├── headerPopup.tpl
    │   │       ├── SearchFormGeneric.tpl
    │   │       ├── SearchFormGenericAdvanced.tpl
    │   │       ├── SubpanelSearchFormGeneric.tpl
    │   │       └── SugarSpot.tpl
    │   ├── Services/
    │   │   ├── Batch/
    │   │   │   └── BatchJob.php
    │   │   ├── NormalizeRecords/
    │   │   │   ├── NormalizeRecords.php
    │   │   │   └── NormalizeRecordsSchedulerJob.php
    │   │   └── ScriptLoader/
    │   │       └── SuiteScriptLoader.php
    │   ├── Smarty/
    │   │   └── plugins/
    │   │       ├── block.minify.php
    │   │       ├── block.nocache.php
    │   │       ├── block.textformat.php
    │   │       ├── compiler.append.php
    │   │       ├── compiler.assign.php
    │   │       ├── function.assign_debug_info.php
    │   │       ├── function.config_load.php
    │   │       ├── function.counter.php
    │   │       ├── function.cycle.php
    │   │       ├── function.debug.php
    │   │       ├── function.diff_for_humans.php
    │   │       ├── function.eval.php
    │   │       ├── function.ext_includes.php
    │   │       ├── function.fetch.php
    │   │       ├── function.html_checkboxes.php
    │   │       ├── function.html_image.php
    │   │       ├── function.html_options.php
    │   │       ├── function.html_radios.php
    │   │       ├── function.html_select_date.php
    │   │       ├── function.html_select_time.php
    │   │       ├── function.html_table.php
    │   │       ├── function.log.php
    │   │       ├── function.mailto.php
    │   │       ├── function.math.php
    │   │       ├── function.modules_selector.php
    │   │       ├── function.multienum_to_array.php
    │   │       ├── function.popup.php
    │   │       ├── function.popup_init.php
    │   │       ├── function.search_controller.php
    │   │       ├── function.sugar_action_menu.php
    │   │       ├── function.sugar_actions_link.php
    │   │       ├── function.sugar_ajax_url.php
    │   │       ├── function.sugar_button.php
    │   │       ├── function.sugar_button_slider.php
    │   │       ├── function.sugar_connector_display.php
    │   │       ├── function.sugar_currency_format.php
    │   │       ├── function.sugar_email_btn.php
    │   │       ├── function.sugar_evalcolumn.php
    │   │       ├── function.sugar_evalcolumn_old.php
    │   │       ├── function.sugar_fetch.php
    │   │       ├── function.sugar_field.php
    │   │       ├── function.sugar_getimage.php
    │   │       ├── function.sugar_getimagepath.php
    │   │       ├── function.sugar_getjspath.php
    │   │       ├── function.sugar_getlink.php
    │   │       ├── function.sugar_getscript.php
    │   │       ├── function.sugar_getwebpath.php
    │   │       ├── function.sugar_help.php
    │   │       ├── function.sugar_image.php
    │   │       ├── function.sugar_include.php
    │   │       ├── function.sugar_link.php
    │   │       ├── function.sugar_literal.php
    │   │       ├── function.sugar_menu.php
    │   │       ├── function.sugar_number_format.php
    │   │       ├── function.sugar_phone.php
    │   │       ├── function.sugar_replace_vars.php
    │   │       ├── function.sugar_run_helper.php
    │   │       ├── function.sugar_translate.php
    │   │       ├── function.sugar_variable_constructor.php
    │   │       ├── function.sugar_varname.php
    │   │       ├── function.sugarvar.php
    │   │       ├── function.sugarvar_connector.php
    │   │       ├── function.suite_check_access.php
    │   │       ├── function.suite_combinescripts.php
    │   │       ├── modifier.capitalize.php
    │   │       ├── modifier.cat.php
    │   │       ├── modifier.count.php
    │   │       ├── modifier.count_characters.php
    │   │       ├── modifier.count_paragraphs.php
    │   │       ├── modifier.count_sentences.php
    │   │       ├── modifier.count_words.php
    │   │       ├── modifier.date_format.php
    │   │       ├── modifier.debug_print_var.php
    │   │       ├── modifier.default_date_value.php
    │   │       ├── modifier.escape.php
    │   │       ├── modifier.explode.php
    │   │       ├── modifier.htmlparser.php
    │   │       ├── modifier.in_array.php
    │   │       ├── modifier.indent.php
    │   │       ├── modifier.json.php
    │   │       ├── modifier.json_decode.php
    │   │       ├── modifier.lookup.php
    │   │       ├── modifier.lower.php
    │   │       ├── modifier.mb_wordwrap.php
    │   │       ├── modifier.multienum_to_ac.php
    │   │       ├── modifier.nl2br.php
    │   │       ├── modifier.number_format.php
    │   │       ├── modifier.regex_replace.php
    │   │       ├── modifier.replace.php
    │   │       ├── modifier.spacify.php
    │   │       ├── modifier.string_format.php
    │   │       ├── modifier.strip.php
    │   │       ├── modifier.strip_semicolon.php
    │   │       ├── modifier.strip_tags.php
    │   │       ├── modifier.to_url.php
    │   │       ├── modifier.truncate.php
    │   │       ├── modifier.upper.php
    │   │       ├── modifier.wordwrap.php
    │   │       ├── modifiercompiler.cat.php
    │   │       ├── modifiercompiler.count_characters.php
    │   │       ├── modifiercompiler.count_paragraphs.php
    │   │       ├── modifiercompiler.count_sentences.php
    │   │       ├── modifiercompiler.count_words.php
    │   │       ├── modifiercompiler.default.php
    │   │       ├── modifiercompiler.from_charset.php
    │   │       ├── modifiercompiler.indent.php
    │   │       ├── modifiercompiler.lower.php
    │   │       ├── modifiercompiler.nl2br.php
    │   │       ├── modifiercompiler.noprint.php
    │   │       ├── modifiercompiler.round.php
    │   │       ├── modifiercompiler.str_repeat.php
    │   │       ├── modifiercompiler.string_format.php
    │   │       ├── modifiercompiler.strip.php
    │   │       ├── modifiercompiler.strip_tags.php
    │   │       ├── modifiercompiler.strlen.php
    │   │       ├── modifiercompiler.to_charset.php
    │   │       ├── modifiercompiler.unescape.php
    │   │       ├── modifiercompiler.upper.php
    │   │       ├── modifiercompiler.wordwrap.php
    │   │       ├── outputfilter.trimwhitespace.php
    │   │       ├── shared.escape_special_chars.php
    │   │       ├── shared.literal_compiler_param.php
    │   │       ├── shared.make_timestamp.php
    │   │       ├── shared.mb_str_replace.php
    │   │       ├── shared.mb_unicode.php
    │   │       └── variablefilter.htmlspecialchars.php
    │   ├── social/
    │   │   ├── get_data.php
    │   │   ├── get_feed_data.php
    │   │   ├── hooks.php
    │   │   ├── facebook/
    │   │   │   ├── facebook.class.php
    │   │   │   ├── facebook.js
    │   │   │   ├── facebook_subpanel.js
    │   │   │   ├── facebookapi.php
    │   │   │   └── facebook_sdk/
    │   │   │       ├── readme.md
    │   │   │       ├── changelog.md
    │   │   │       ├── composer.json
    │   │   │       ├── .travis.yml
    │   │   │       ├── examples/
    │   │   │       │   ├── example.php
    │   │   │       │   └── with_js_sdk.php
    │   │   │       ├── src/
    │   │   │       │   ├── base_facebook.php
    │   │   │       │   ├── facebook.php
    │   │   │       │   └── fb_ca_chain_bundle.crt
    │   │   │       └── tests/
    │   │   │           ├── bootstrap.php
    │   │   │           └── tests.php
    │   │   └── twitter/
    │   │       ├── twitter.css
    │   │       ├── twitter.js
    │   │       ├── twitter_feed.js
    │   │       ├── twitter_helper.php
    │   │       ├── twitterapi.php
    │   │       └── twitter_auth/
    │   │           ├── callback.php
    │   │           └── twitteroauth/
    │   │               ├── OAuth.php
    │   │               └── twitteroauth.php
    │   ├── SubPanel/
    │   │   ├── registered_layout_defs.php
    │   │   ├── SubPanel.js
    │   │   ├── SubPanel.php
    │   │   ├── SubPanelDefinitions.php
    │   │   ├── SubPanelDynamic.html
    │   │   ├── SubPanelRowCounter.php
    │   │   ├── subpanels.txt
    │   │   ├── SubPanelSearchDisplay.php
    │   │   ├── SubPanelSearchForm.php
    │   │   ├── SubPanelTiles.js
    │   │   ├── SubPanelTiles.php
    │   │   ├── SubPanelTilesTabs.php
    │   │   ├── SubPanelViewer.php
    │   │   ├── SugarTab.php
    │   │   └── tpls/
    │   │       ├── singletabmenu.tpl
    │   │       ├── SubPanelCheckbox.tpl
    │   │       ├── SubPanelDynamic.tpl
    │   │       └── SubPanelTiles.tpl
    │   ├── SugarCache/
    │   │   ├── SugarCache.php
    │   │   ├── SugarCacheAbstract.php
    │   │   ├── SugarCacheAPC.php
    │   │   ├── SugarCacheFile.php
    │   │   ├── SugarCacheMemcache.php
    │   │   ├── SugarCacheMemcached.php
    │   │   ├── SugarCacheMemory.php
    │   │   ├── SugarCacheRedis.php
    │   │   ├── SugarCachesMash.php
    │   │   ├── SugarCacheWincache.php
    │   │   └── SugarCacheZend.php
    │   ├── SugarCharts/
    │   │   ├── JsChart.php
    │   │   ├── SugarChart.php
    │   │   ├── SugarChartFactory.php
    │   │   ├── Jit/
    │   │   │   ├── Jit.php
    │   │   │   ├── JitReports.php
    │   │   │   ├── css/
    │   │   │   │   └── base.css
    │   │   │   ├── js/
    │   │   │   │   ├── mySugarCharts.js
    │   │   │   │   ├── sugarCharts.js
    │   │   │   │   └── Jit/
    │   │   │   │       └── jit.js
    │   │   │   └── tpls/
    │   │   │       ├── chart.tpl
    │   │   │       └── DashletGenericChartScript.tpl
    │   │   └── swf/
    │   │       ├── barChart.swf
    │   │       ├── chart.swf
    │   │       ├── groupByChart.swf
    │   │       ├── horizontalBarChart.swf
    │   │       ├── horizontalGroupByChart.swf
    │   │       ├── lineChart.swf
    │   │       ├── pieChart.swf
    │   │       └── stackedGroupByChart.swf
    │   ├── SugarDependentDropdown/
    │   │   ├── SugarDependentDropdown.php
    │   │   ├── javascript/
    │   │   │   └── SugarDependentDropdown.js
    │   │   └── metadata/
    │   │       └── dependentDropdown.php
    │   ├── SugarEmailAddress/
    │   │   ├── getEmailAddressWidget.php
    │   │   ├── SugarEmailAddress.js
    │   │   ├── SugarEmailAddress.php
    │   │   └── templates/
    │   │       ├── forDetailView.tpl
    │   │       ├── forDuplicatesView.tpl
    │   │       ├── forEditView.tpl
    │   │       ├── forWideFormBodyView.tpl
    │   │       └── optInStatusTick.tpl
    │   ├── SugarFields/
    │   │   ├── SugarFieldHandler.php
    │   │   ├── Fields/
    │   │   │   ├── Address/
    │   │   │   │   ├── DetailView.tpl
    │   │   │   │   ├── EditView.tpl
    │   │   │   │   ├── en_us.DetailView.tpl
    │   │   │   │   ├── en_us.EditView.tpl
    │   │   │   │   ├── SugarFieldAddress.js
    │   │   │   │   └── SugarFieldAddress.php
    │   │   │   ├── Assigned_user_name/
    │   │   │   │   ├── EditViewFunction.tpl
    │   │   │   │   ├── SearchView.tpl
    │   │   │   │   └── SugarFieldAssigned_user_name.php
    │   │   │   ├── Base/
    │   │   │   │   ├── DetailView.tpl
    │   │   │   │   ├── DetailViewFunction.tpl
    │   │   │   │   ├── EditView.tpl
    │   │   │   │   ├── EditViewFunction.tpl
    │   │   │   │   ├── ImportViewFunction.tpl
    │   │   │   │   ├── InlineEdit.tpl
    │   │   │   │   ├── InlineEditView.tpl
    │   │   │   │   ├── ListView.tpl
    │   │   │   │   ├── SearchForm.tpl
    │   │   │   │   └── SugarFieldBase.php
    │   │   │   ├── Bool/
    │   │   │   │   ├── DetailView.tpl
    │   │   │   │   ├── EditView.tpl
    │   │   │   │   ├── InlineEdit.tpl
    │   │   │   │   ├── InlineEditView.tpl
    │   │   │   │   ├── ListView.tpl
    │   │   │   │   ├── SearchView.tpl
    │   │   │   │   └── SugarFieldBool.php
    │   │   │   ├── Collection/
    │   │   │   │   ├── CollectionDetailView.tpl
    │   │   │   │   ├── CollectionEditView.tpl
    │   │   │   │   ├── CollectionEditViewRow.tpl
    │   │   │   │   ├── DetailView.tpl
    │   │   │   │   ├── EditView.tpl
    │   │   │   │   ├── SugarFieldCollection.js
    │   │   │   │   ├── SugarFieldCollection.php
    │   │   │   │   ├── view.sugarfieldcollection.php
    │   │   │   │   └── ViewSugarFieldCollection.php
    │   │   │   ├── CronSchedule/
    │   │   │   │   ├── DetailView.tpl
    │   │   │   │   ├── EditView.tpl
    │   │   │   │   ├── SugarFieldCronSchedule.js
    │   │   │   │   └── SugarFieldCronSchedule.php
    │   │   │   ├── Currency/
    │   │   │   │   ├── DetailView.tpl
    │   │   │   │   ├── EditView.tpl
    │   │   │   │   ├── ListView.tpl
    │   │   │   │   └── SugarFieldCurrency.php
    │   │   │   ├── Datetime/
    │   │   │   │   ├── DetailView.tpl
    │   │   │   │   ├── EditView.tpl
    │   │   │   │   └── SugarFieldDatetime.php
    │   │   │   ├── Datetimecombo/
    │   │   │   │   ├── Datetimecombo.js
    │   │   │   │   ├── EditView.tpl
    │   │   │   │   ├── RangeSearchForm.tpl
    │   │   │   │   ├── SearchView.tpl
    │   │   │   │   └── SugarFieldDatetimecombo.php
    │   │   │   ├── Download/
    │   │   │   │   ├── DetailView.tpl
    │   │   │   │   └── SugarFieldDownload.php
    │   │   │   ├── Dynamicenum/
    │   │   │   │   ├── EditView.tpl
    │   │   │   │   ├── SugarFieldDynamicenum.js
    │   │   │   │   └── SugarFieldDynamicenum.php
    │   │   │   ├── EmailBody/
    │   │   │   │   ├── DetailView.tpl
    │   │   │   │   └── SugarFieldEmailBody.php
    │   │   │   ├── Enum/
    │   │   │   │   ├── DetailView.tpl
    │   │   │   │   ├── DetailViewFunction.tpl
    │   │   │   │   ├── EditView.tpl
    │   │   │   │   ├── EditViewFunction.tpl
    │   │   │   │   ├── SearchView.tpl
    │   │   │   │   └── SugarFieldEnum.php
    │   │   │   ├── File/
    │   │   │   │   ├── DetailView.tpl
    │   │   │   │   ├── EditView.tpl
    │   │   │   │   ├── ListView.tpl
    │   │   │   │   ├── SearchView.tpl
    │   │   │   │   ├── SugarFieldFile.js
    │   │   │   │   └── SugarFieldFile.php
    │   │   │   ├── Float/
    │   │   │   │   ├── DetailView.tpl
    │   │   │   │   ├── EditView.tpl
    │   │   │   │   └── SugarFieldFloat.php
    │   │   │   ├── Fullname/
    │   │   │   │   ├── DetailView.tpl
    │   │   │   │   └── SugarFieldFullname.php
    │   │   │   ├── Html/
    │   │   │   │   ├── DetailView.tpl
    │   │   │   │   ├── EditView.tpl
    │   │   │   │   └── SugarFieldHtml.php
    │   │   │   ├── Id/
    │   │   │   │   └── SugarFieldId.php
    │   │   │   ├── Iframe/
    │   │   │   │   ├── DetailView.tpl
    │   │   │   │   └── EditView.tpl
    │   │   │   ├── Image/
    │   │   │   │   ├── deleteAttachment.php
    │   │   │   │   ├── DetailView.tpl
    │   │   │   │   ├── EditView.tpl
    │   │   │   │   ├── ListView.tpl
    │   │   │   │   ├── SugarFieldFile.js
    │   │   │   │   └── SugarFieldImage.php
    │   │   │   ├── Int/
    │   │   │   │   ├── DetailView.tpl
    │   │   │   │   ├── EditView.tpl
    │   │   │   │   ├── RangeSearchForm.tpl
    │   │   │   │   ├── SearchForm.tpl
    │   │   │   │   └── SugarFieldInt.php
    │   │   │   ├── Link/
    │   │   │   │   ├── DetailView.tpl
    │   │   │   │   ├── EditView.tpl
    │   │   │   │   └── ListView.tpl
    │   │   │   ├── Multienum/
    │   │   │   │   ├── DetailView.tpl
    │   │   │   │   ├── EditView.tpl
    │   │   │   │   ├── EditViewFunction.tpl
    │   │   │   │   ├── ListView.tpl
    │   │   │   │   ├── SearchView.tpl
    │   │   │   │   └── SugarFieldMultienum.php
    │   │   │   ├── Parent/
    │   │   │   │   ├── DetailView.tpl
    │   │   │   │   ├── EditView.tpl
    │   │   │   │   ├── SearchView.tpl
    │   │   │   │   └── SugarFieldParent.php
    │   │   │   ├── Password/
    │   │   │   │   ├── EditView.tpl
    │   │   │   │   └── SugarFieldPassword.php
    │   │   │   ├── Phone/
    │   │   │   │   ├── DetailView.tpl
    │   │   │   │   ├── EditView.tpl
    │   │   │   │   ├── ListView.tpl
    │   │   │   │   └── SugarFieldPhone.php
    │   │   │   ├── Radioenum/
    │   │   │   │   ├── DetailView.tpl
    │   │   │   │   ├── EditView.tpl
    │   │   │   │   └── SugarFieldRadioenum.php
    │   │   │   ├── Readonly/
    │   │   │   │   └── SugarFieldReadonly.php
    │   │   │   ├── Relate/
    │   │   │   │   ├── DetailView.tpl
    │   │   │   │   ├── EditView.tpl
    │   │   │   │   ├── SearchView.tpl
    │   │   │   │   └── SugarFieldRelate.php
    │   │   │   ├── Stringmap/
    │   │   │   │   ├── DetailView.tpl
    │   │   │   │   ├── EditView.tpl
    │   │   │   │   ├── SugarFieldStringmap.php
    │   │   │   │   └── js/
    │   │   │   │       ├── stringmap-factory.js
    │   │   │   │       └── stringmap.js
    │   │   │   ├── Text/
    │   │   │   │   ├── ClassicEditView.tpl
    │   │   │   │   ├── DetailView.tpl
    │   │   │   │   ├── EditView.tpl
    │   │   │   │   └── SugarFieldText.php
    │   │   │   ├── Time/
    │   │   │   │   ├── EditView.tpl
    │   │   │   │   ├── SugarFieldTime.php
    │   │   │   │   └── Time.js
    │   │   │   ├── URL/
    │   │   │   │   ├── DetailView.tpl
    │   │   │   │   ├── EditView.tpl
    │   │   │   │   └── ListView.tpl
    │   │   │   ├── Username/
    │   │   │   │   ├── DetailView.tpl
    │   │   │   │   └── SugarFieldUsername.php
    │   │   │   └── Wysiwyg/
    │   │   │       ├── DetailView.tpl
    │   │   │       ├── EditView.tpl
    │   │   │       ├── ListView.tpl
    │   │   │       ├── SugarFieldWysiwyg.php
    │   │   │       └── css/
    │   │   │           └── wysiwyg-editview.css
    │   │   └── Parsers/
    │   │       ├── DetailViewMetaParser.php
    │   │       ├── EditViewMetaParser.php
    │   │       ├── MetaParser.php
    │   │       ├── QuickCreateMetaParser.php
    │   │       ├── SearchFormMetaParser.php
    │   │       └── Rules/
    │   │           ├── AccountsParseRule.php
    │   │           ├── ActivitiesParseRule.php
    │   │           ├── AddressRule.php
    │   │           ├── BaseRule.php
    │   │           ├── BugsParseRule.php
    │   │           ├── CallsParseRule.php
    │   │           ├── CampaignsParseRule.php
    │   │           ├── ContactsParseRule.php
    │   │           ├── ContractsParseRule.php
    │   │           ├── DocumentsParseRule.php
    │   │           ├── EmailAddressRule.php
    │   │           ├── EmptyRowRule.php
    │   │           ├── LeadsParseRule.php
    │   │           ├── MeetingsParseRule.php
    │   │           ├── NotesParseRule.php
    │   │           ├── OpportunitiesParseRule.php
    │   │           ├── ParseRules.php
    │   │           ├── ProductsParseRule.php
    │   │           ├── QuotesParseRule.php
    │   │           ├── UndefinedVardefRule.php
    │   │           ├── VariableCleanupRule.php
    │   │           └── VariableSubstitutionRule.php
    │   ├── SugarFolders/
    │   │   ├── SugarFolderEmptyException.php
    │   │   └── SugarFolders.php
    │   ├── SugarHtml/
    │   │   └── SugarHtml.php
    │   ├── SugarLogger/
    │   │   ├── LoggerManager.php
    │   │   ├── LoggerTemplate.php
    │   │   └── SugarLogger.php
    │   ├── SugarObjects/
    │   │   ├── LanguageManager.php
    │   │   ├── SugarConfig.php
    │   │   ├── SugarRegistry.php
    │   │   ├── SugarSession.php
    │   │   ├── translated_prefix.php
    │   │   ├── VardefManager.php
    │   │   ├── forms/
    │   │   │   ├── FormBase.php
    │   │   │   └── PersonFormBase.php
    │   │   ├── implements/
    │   │   │   ├── assignable/
    │   │   │   │   ├── vardefs.php
    │   │   │   │   └── language/
    │   │   │   │       └── en_us.lang.php
    │   │   │   ├── security_groups/
    │   │   │   │   ├── vardefs.php
    │   │   │   │   └── language/
    │   │   │   │       └── en_us.lang.php
    │   │   │   └── team_security/
    │   │   │       ├── vardefs.php
    │   │   │       └── language/
    │   │   │           └── en_us.lang.php
    │   │   └── templates/
    │   │       ├── basic/
    │   │       │   ├── Basic.php
    │   │       │   ├── vardefs.php
    │   │       │   ├── Dashlets/
    │   │       │   │   └── Dashlet/
    │   │       │   │       ├── m-n-Dashlet.meta.php
    │   │       │   │       └── m-n-Dashlet.php
    │   │       │   ├── language/
    │   │       │   │   └── en_us.lang.php
    │   │       │   └── metadata/
    │   │       │       ├── dashletviewdefs.php
    │   │       │       ├── detailviewdefs.php
    │   │       │       ├── editviewdefs.php
    │   │       │       ├── listviewdefs.php
    │   │       │       ├── metafiles.php
    │   │       │       ├── popupdefs.php
    │   │       │       ├── quickcreatedefs.php
    │   │       │       ├── searchdefs.php
    │   │       │       ├── SearchFields.php
    │   │       │       ├── subpaneldefs.php
    │   │       │       └── subpanels/
    │   │       │           └── default.php
    │   │       ├── company/
    │   │       │   ├── Company.php
    │   │       │   ├── vardefs.php
    │   │       │   ├── language/
    │   │       │   │   ├── en_us.lang.php
    │   │       │   │   └── application/
    │   │       │   │       └── en_us.lang.php
    │   │       │   └── metadata/
    │   │       │       ├── dashletviewdefs.php
    │   │       │       ├── detailviewdefs.php
    │   │       │       ├── editviewdefs.php
    │   │       │       ├── listviewdefs.php
    │   │       │       ├── metafiles.php
    │   │       │       ├── popupdefs.php
    │   │       │       ├── quickcreatedefs.php
    │   │       │       ├── searchdefs.php
    │   │       │       ├── SearchFields.php
    │   │       │       ├── subpaneldefs.php
    │   │       │       └── subpanels/
    │   │       │           └── default.php
    │   │       ├── file/
    │   │       │   ├── controller.php
    │   │       │   ├── File.php
    │   │       │   ├── vardefs.php
    │   │       │   ├── language/
    │   │       │   │   ├── en_us.lang.php
    │   │       │   │   └── application/
    │   │       │   │       └── en_us.lang.php
    │   │       │   ├── metadata/
    │   │       │   │   ├── dashletviewdefs.php
    │   │       │   │   ├── detailviewdefs.php
    │   │       │   │   ├── editviewdefs.php
    │   │       │   │   ├── listviewdefs.php
    │   │       │   │   ├── metafiles.php
    │   │       │   │   ├── quickcreatedefs.php
    │   │       │   │   ├── searchdefs.php
    │   │       │   │   ├── SearchFields.php
    │   │       │   │   ├── subpaneldefs.php
    │   │       │   │   └── subpanels/
    │   │       │   │       └── default.php
    │   │       │   └── views/
    │   │       │       └── view.edit.php
    │   │       ├── issue/
    │   │       │   ├── config.php
    │   │       │   ├── Issue.php
    │   │       │   ├── vardefs.php
    │   │       │   ├── language/
    │   │       │   │   ├── en_us.lang.php
    │   │       │   │   └── application/
    │   │       │   │       └── en_us.lang.php
    │   │       │   └── metadata/
    │   │       │       ├── dashletviewdefs.php
    │   │       │       ├── detailviewdefs.php
    │   │       │       ├── editviewdefs.php
    │   │       │       ├── listviewdefs.php
    │   │       │       ├── metafiles.php
    │   │       │       ├── popupdefs.php
    │   │       │       ├── quickcreatedefs.php
    │   │       │       ├── searchdefs.php
    │   │       │       ├── SearchFields.php
    │   │       │       ├── subpaneldefs.php
    │   │       │       └── subpanels/
    │   │       │           └── default.php
    │   │       ├── person/
    │   │       │   ├── config.php
    │   │       │   ├── Person.php
    │   │       │   ├── vardefs.php
    │   │       │   ├── language/
    │   │       │   │   └── en_us.lang.php
    │   │       │   └── metadata/
    │   │       │       ├── dashletviewdefs.php
    │   │       │       ├── detailviewdefs.php
    │   │       │       ├── editviewdefs.php
    │   │       │       ├── listviewdefs.php
    │   │       │       ├── metafiles.php
    │   │       │       ├── popupdefs.php
    │   │       │       ├── quickcreatedefs.php
    │   │       │       ├── searchdefs.php
    │   │       │       ├── SearchFields.php
    │   │       │       ├── subpaneldefs.php
    │   │       │       └── subpanels/
    │   │       │           └── default.php
    │   │       └── sale/
    │   │           ├── Chance.php
    │   │           ├── Sale.php
    │   │           ├── vardefs.php
    │   │           ├── language/
    │   │           │   ├── en_us.lang.php
    │   │           │   └── application/
    │   │           │       └── en_us.lang.php
    │   │           └── metadata/
    │   │               ├── dashletviewdefs.php
    │   │               ├── detailviewdefs.php
    │   │               ├── editviewdefs.php
    │   │               ├── listviewdefs.php
    │   │               ├── metafiles.php
    │   │               ├── popupdefs.php
    │   │               ├── quickcreatedefs.php
    │   │               ├── searchdefs.php
    │   │               ├── SearchFields.php
    │   │               ├── subpaneldefs.php
    │   │               └── subpanels/
    │   │                   └── default.php
    │   ├── Sugarpdf/
    │   │   ├── FontManager.php
    │   │   ├── Sugarpdf.php
    │   │   ├── sugarpdf_config.php
    │   │   ├── sugarpdf_default.php
    │   │   ├── SugarpdfFactory.php
    │   │   ├── SugarpdfHelper.php
    │   │   └── sugarpdf/
    │   │       └── sugarpdf.smarty.php
    │   ├── SugarQueue/
    │   │   ├── SugarCronJobs.php
    │   │   ├── SugarCronRemoteJobs.php
    │   │   └── SugarJobQueue.php
    │   ├── SugarTheme/
    │   │   ├── cssmin.php
    │   │   ├── getImage.php
    │   │   ├── SugarSprites.php
    │   │   ├── SugarTheme.php
    │   │   └── SugarThemeRegistry.php
    │   ├── SuiteEditor/
    │   │   ├── SuiteEditorConnector.php
    │   │   ├── SuiteEditorDirectHTML.php
    │   │   ├── SuiteEditorInterface.php
    │   │   ├── SuiteEditorMozaik.php
    │   │   ├── SuiteEditorSettings.php
    │   │   ├── SuiteEditorSettingsForDirectHTML.php
    │   │   ├── SuiteEditorSettingsForMozaik.php
    │   │   ├── SuiteEditorSettingsForTinyMCE.php
    │   │   ├── SuiteEditorTinyMCE.php
    │   │   └── tpls/
    │   │       ├── SuiteEditorConnector.tpl
    │   │       ├── SuiteEditorDirectHTML.tpl
    │   │       ├── SuiteEditorMozaik.tpl
    │   │       └── SuiteEditorTinyMCE.tpl
    │   ├── SuiteGraphs/
    │   │   ├── RGraphIncludes.php
    │   │   └── rgraph/
    │   │       ├── default.html
    │   │       ├── license.txt
    │   │       ├── css/
    │   │       │   ├── animations.css
    │   │       │   ├── ModalDialog.css
    │   │       │   └── website.css
    │   │       ├── libraries/
    │   │       │   ├── financial-data.js
    │   │       │   ├── RGraph.bar.js
    │   │       │   ├── RGraph.bipolar.js
    │   │       │   ├── RGraph.common.annotate.js
    │   │       │   ├── RGraph.common.context.js
    │   │       │   ├── RGraph.common.core.js
    │   │       │   ├── RGraph.common.csv.js
    │   │       │   ├── RGraph.common.deprecated.js
    │   │       │   ├── RGraph.common.dynamic.js
    │   │       │   ├── RGraph.common.effects.js
    │   │       │   ├── RGraph.common.key.js
    │   │       │   ├── RGraph.common.resizing.js
    │   │       │   ├── RGraph.common.tooltips.js
    │   │       │   ├── RGraph.common.zoom.js
    │   │       │   ├── RGraph.drawing.background.js
    │   │       │   ├── RGraph.drawing.circle.js
    │   │       │   ├── RGraph.drawing.image.js
    │   │       │   ├── RGraph.drawing.marker1.js
    │   │       │   ├── RGraph.drawing.marker2.js
    │   │       │   ├── RGraph.drawing.marker3.js
    │   │       │   ├── RGraph.drawing.poly.js
    │   │       │   ├── RGraph.drawing.rect.js
    │   │       │   ├── RGraph.drawing.text.js
    │   │       │   ├── RGraph.drawing.xaxis.js
    │   │       │   ├── RGraph.drawing.yaxis.js
    │   │       │   ├── RGraph.fuel.js
    │   │       │   ├── RGraph.funnel.js
    │   │       │   ├── RGraph.gantt.js
    │   │       │   ├── RGraph.gauge.js
    │   │       │   ├── RGraph.hbar.js
    │   │       │   ├── RGraph.hprogress.js
    │   │       │   ├── RGraph.line.js
    │   │       │   ├── RGraph.meter.js
    │   │       │   ├── RGraph.modaldialog.js
    │   │       │   ├── RGraph.odo.js
    │   │       │   ├── RGraph.pie.js
    │   │       │   ├── RGraph.radar.js
    │   │       │   ├── RGraph.rose.js
    │   │       │   ├── RGraph.rscatter.js
    │   │       │   ├── RGraph.scatter.js
    │   │       │   ├── RGraph.thermometer.js
    │   │       │   ├── RGraph.vprogress.js
    │   │       │   └── RGraph.waterfall.js
    │   │       └── scripts/
    │   │           ├── jsmin
    │   │           └── jsmin.txt
    │   ├── tcpdf/
    │   │   ├── 2dbarcodes.php
    │   │   ├── barcodes.php
    │   │   ├── htmlcolors.php
    │   │   ├── tcpdf.php
    │   │   ├── unicode_data.php
    │   │   ├── config/
    │   │   │   ├── tcpdf_config.php
    │   │   │   ├── tcpdf_config_alt.php
    │   │   │   └── lang/
    │   │   │       ├── eng.php
    │   │   │       └── ita.php
    │   │   └── fonts/
    │   │       ├── uni2cid_ac15.php
    │   │       ├── uni2cid_ag15.php
    │   │       ├── uni2cid_aj16.php
    │   │       ├── uni2cid_ak12.php
    │   │       └── utils/
    │   │           └── makefont.php
    │   ├── TemplateHandler/
    │   │   └── TemplateHandler.php
    │   ├── templates/
    │   │   ├── Template.php
    │   │   ├── TemplateDragDropChooser.php
    │   │   └── TemplateGroupChooser.php
    │   ├── utils/
    │   │   ├── activity_utils.php
    │   │   ├── additional_details.php
    │   │   ├── array_utils.php
    │   │   ├── autoloader.php
    │   │   ├── BaseHandler.php
    │   │   ├── db_utils.php
    │   │   ├── encryption_utils.php
    │   │   ├── external_cache.php
    │   │   ├── file_utils.php
    │   │   ├── layout_utils.php
    │   │   ├── logic_utils.php
    │   │   ├── LogicHook.php
    │   │   ├── mvc_utils.php
    │   │   ├── php_zip_utils.php
    │   │   ├── progress_bar_utils.php
    │   │   ├── recaptcha_disabled.tpl
    │   │   ├── recaptcha_enabled.tpl
    │   │   ├── recaptcha_utils.php
    │   │   ├── security_utils.php
    │   │   └── sugar_file_utils.php
    │   ├── VarDefHandler/
    │   │   ├── listvardefoverride.php
    │   │   ├── vardef_meta_arrays.php
    │   │   └── VarDefHandler.php
    │   └── ytree/
    │       ├── ExtNode.php
    │       ├── JQueryTree.php
    │       ├── Node.php
    │       ├── Tree.php
    │       ├── treeutil.js
    │       └── TreeView/
    │           ├── HTMLNode.js
    │           ├── license.txt
    │           ├── MenuNode.js
    │           ├── Node.js
    │           ├── RootNode.js
    │           ├── TaskNode.js
    │           ├── TextNode.js
    │           ├── TreeView.js
    │           ├── anim/
    │           │   ├── TVAnim.js
    │           │   ├── TVFadeIn.js
    │           │   └── TVFadeOut.js
    │           └── css/
    │               ├── check/
    │               │   └── tree.css
    │               ├── default/
    │               │   └── tree.css
    │               ├── folders/
    │               │   └── tree.css
    │               └── forecasts/
    │                   └── tree.css
    ├── install/
    │   ├── checkDBSettings.php
    │   ├── complete_install.php
    │   ├── dbConfig.js
    │   ├── dbConfig_a.php
    │   ├── demoData.en_us.php
    │   ├── download_modules.php
    │   ├── install.css
    │   ├── install2.css
    │   ├── install_defaults.php
    │   ├── install_utils.php
    │   ├── installCommon.js
    │   ├── installConfig.php
    │   ├── installDisabled.php
    │   ├── installHelp.php
    │   ├── installSystemCheck.php
    │   ├── installType.php
    │   ├── lang.config.php
    │   ├── license.js
    │   ├── license.php
    │   ├── licensePrint.php
    │   ├── oc_convert.js
    │   ├── oc_install.js
    │   ├── old_php.js
    │   ├── old_php.php
    │   ├── performSetup.php
    │   ├── populateSeedData.php
    │   ├── ready.css
    │   ├── ready.php
    │   ├── register.js
    │   ├── register.php
    │   ├── siteConfig.js
    │   ├── siteConfig_a.php
    │   ├── siteConfig_b.php
    │   ├── TeamDemoData.php
    │   ├── UploadLangFileCheck.php
    │   ├── UserDemoData.php
    │   ├── welcome.php
    │   ├── data/
    │   │   └── disc_client.php
    │   ├── language/
    │   │   └── en_us.lang.php
    │   ├── seed_data/
    │   │   ├── Advanced_Password_SeedData.php
    │   │   └── quotes_SeedData.php
    │   └── suite_install/
    │       ├── AdvancedOpenDiscovery.php
    │       ├── AdvancedOpenEvents.php
    │       ├── AdvancedOpenPortal.php
    │       ├── AdvancedOpenSales.php
    │       ├── collations.php
    │       ├── enabledTabs.php
    │       ├── GoogleMaps.php
    │       ├── Projects.php
    │       ├── Reschedule.php
    │       ├── scenarios.php
    │       ├── Search.php
    │       ├── SecurityGroups.php
    │       ├── Social.php
    │       ├── suite_install.php
    │       └── SystemEmailTemplates.php
    ├── jssource/
    │   ├── JSGroupings.php
    │   ├── minify.php
    │   ├── minify_utils.php
    │   ├── SugarMin.php
    │   └── src_files/
    │       ├── include/
    │       │   ├── connectors/
    │       │   │   └── formatters/
    │       │   │       └── default/
    │       │   │           └── company_detail.js
    │       │   ├── EditView/
    │       │   │   └── Panels.js
    │       │   ├── javascript/
    │       │   │   ├── ajaxUI.js
    │       │   │   ├── alerts.js
    │       │   │   ├── calendar.js
    │       │   │   ├── cookie.js
    │       │   │   ├── dashlets.js
    │       │   │   ├── EmailsComposeViewModal.js
    │       │   │   ├── importWizard.js
    │       │   │   ├── include.js
    │       │   │   ├── iscroll.js
    │       │   │   ├── jsclass_async.js
    │       │   │   ├── jsclass_base.js
    │       │   │   ├── menu.js
    │       │   │   ├── message-box.js
    │       │   │   ├── popup_helper.js
    │       │   │   ├── popup_parent_helper.js
    │       │   │   ├── quickCompose.js
    │       │   │   ├── quicksearch.js
    │       │   │   ├── report_additionals.js
    │       │   │   ├── sugar_3.js
    │       │   │   ├── sugar_connection_event_listener.js
    │       │   │   ├── sugar_yui_overrides.js
    │       │   │   ├── tour.js
    │       │   │   ├── phpjs/
    │       │   │   │   ├── get_html_translation_table.js
    │       │   │   │   ├── html_entity_decode.js
    │       │   │   │   ├── htmlentities.js
    │       │   │   │   └── license.js
    │       │   │   └── sugarwidgets/
    │       │   │       ├── SugarYUILoader.js
    │       │   │       └── SugarYUIWidgets.js
    │       │   ├── MySugar/
    │       │   │   └── javascript/
    │       │   │       └── MySugar.js
    │       │   ├── SubPanel/
    │       │   │   └── SubPanelTiles.js
    │       │   ├── SugarCharts/
    │       │   │   └── Jit/
    │       │   │       ├── FlashCanvas/
    │       │   │       │   ├── canvas2png.js
    │       │   │       │   └── flashcanvas.js
    │       │   │       └── js/
    │       │   │           ├── mySugarCharts.js
    │       │   │           └── Jit/
    │       │   │               └── jit.js
    │       │   ├── SugarDependentDropdown/
    │       │   │   └── javascript/
    │       │   │       └── SugarDependentDropdown.js
    │       │   ├── SugarEmailAddress/
    │       │   │   └── SugarEmailAddress.js
    │       │   ├── SugarFields/
    │       │   │   └── Fields/
    │       │   │       ├── Address/
    │       │   │       │   └── SugarFieldAddress.js
    │       │   │       ├── Collection/
    │       │   │       │   └── SugarFieldCollection.js
    │       │   │       ├── Datetimecombo/
    │       │   │       │   └── Datetimecombo.js
    │       │   │       ├── File/
    │       │   │       │   └── SugarFieldFile.js
    │       │   │       └── Time/
    │       │   │           └── Time.js
    │       │   └── ytree/
    │       │       ├── treeutil.js
    │       │       └── TreeView/
    │       │           ├── HTMLNode.js
    │       │           ├── MenuNode.js
    │       │           ├── Node.js
    │       │           ├── RootNode.js
    │       │           ├── TaskNode.js
    │       │           ├── TextNode.js
    │       │           ├── TreeView.js
    │       │           └── anim/
    │       │               ├── TVAnim.js
    │       │               ├── TVFadeIn.js
    │       │               └── TVFadeOut.js
    │       ├── install/
    │       │   ├── dbConfig.js
    │       │   ├── installCommon.js
    │       │   ├── license.js
    │       │   ├── oc_convert.js
    │       │   ├── oc_install.js
    │       │   ├── register.js
    │       │   └── siteConfig.js
    │       ├── modules/
    │       │   ├── Accounts/
    │       │   │   └── Account.js
    │       │   ├── ACLRoles/
    │       │   │   └── ACLRoles.js
    │       │   ├── Administration/
    │       │   │   └── javascript/
    │       │   │       ├── Administration.js
    │       │   │       └── Async.js
    │       │   ├── AM_ProjectTemplates/
    │       │   │   └── jsclass_scheduler.js
    │       │   ├── Calendar/
    │       │   │   └── Cal.js
    │       │   ├── Campaigns/
    │       │   │   ├── DetailView.js
    │       │   │   ├── WebToLead.js
    │       │   │   └── wizard.js
    │       │   ├── Connectors/
    │       │   │   └── Connector.js
    │       │   ├── Contacts/
    │       │   │   └── Contact.js
    │       │   ├── Currencies/
    │       │   │   └── EditView.js
    │       │   ├── Documents/
    │       │   │   └── documents.js
    │       │   ├── EAPM/
    │       │   │   └── EAPMEdit.js
    │       │   ├── EmailTemplates/
    │       │   │   └── EmailTemplate.js
    │       │   ├── Home/
    │       │   │   └── tour.js
    │       │   ├── InboundEmail/
    │       │   │   └── InboundEmail.js
    │       │   ├── Leads/
    │       │   │   └── Lead.js
    │       │   ├── Meetings/
    │       │   │   ├── duration_dependency.js
    │       │   │   └── jsclass_scheduler.js
    │       │   ├── MergeRecords/
    │       │   │   └── Merge.js
    │       │   ├── Project/
    │       │   │   ├── jsclass_scheduler.js
    │       │   │   └── Project.js
    │       │   ├── ProjectTask/
    │       │   │   └── ProjectTask.js
    │       │   ├── Schedulers/
    │       │   │   └── Schedulers.js
    │       │   ├── Studio/
    │       │   │   ├── JSTransaction.js
    │       │   │   ├── studio.js
    │       │   │   ├── studiodd.js
    │       │   │   ├── studiotabgroups.js
    │       │   │   └── ygDDListStudio.js
    │       │   ├── UpgradeWizard/
    │       │   │   └── upgradeWizard.js
    │       │   └── Users/
    │       │       ├── DetailView.js
    │       │       ├── login.js
    │       │       ├── PasswordRequirementBox.js
    │       │       ├── User.js
    │       │       └── UserEditView.js
    │       ├── service/
    │       │   └── utils/
    │       │       └── SugarRest.js
    │       └── themes/
    │           ├── default/
    │           │   └── js/
    │           │       └── style.js
    │           └── Sugar5/
    │               └── js/
    │                   └── style.js
    ├── lib/
    │   ├── API/
    │   │   ├── core/
    │   │   │   ├── app.php
    │   │   │   └── containers.php
    │   │   ├── JsonApi/
    │   │   │   └── v1/
    │   │   │       ├── JsonApi.php
    │   │   │       ├── Links.php
    │   │   │       ├── schema.json
    │   │   │       ├── Enumerator/
    │   │   │       │   ├── LinksMessage.php
    │   │   │       │   ├── RelationshipType.php
    │   │   │       │   ├── ResourceEnum.php
    │   │   │       │   └── SugarBeanRelationshipType.php
    │   │   │       ├── Filters/
    │   │   │       │   ├── Interfaces/
    │   │   │       │   │   ├── ByIdFilterInterpreter.php
    │   │   │       │   │   ├── ByPreMadeFilterInterpreter.php
    │   │   │       │   │   ├── HasParserInterface.php
    │   │   │       │   │   ├── OperatorInterface.php
    │   │   │       │   │   ├── ParserInterface.php
    │   │   │       │   │   └── ValidatorInterface.php
    │   │   │       │   ├── Interpreters/
    │   │   │       │   │   ├── FilterInterpreter.php
    │   │   │       │   │   ├── ByIdFilters/
    │   │   │       │   │   │   └── ByIdFilter.php
    │   │   │       │   │   └── ByPreMadeFilters/
    │   │   │       │   │       └── Today.php
    │   │   │       │   ├── Operators/
    │   │   │       │   │   ├── FieldOperator.php
    │   │   │       │   │   ├── Operator.php
    │   │   │       │   │   ├── SpecialOperator.php
    │   │   │       │   │   ├── Comparators/
    │   │   │       │   │   │   ├── EqualsOperator.php
    │   │   │       │   │   │   ├── GreaterThanOperator.php
    │   │   │       │   │   │   ├── GreaterThanOrEqualsOperator.php
    │   │   │       │   │   │   ├── InOperator.php
    │   │   │       │   │   │   ├── LessThanOperator.php
    │   │   │       │   │   │   ├── LessThanOrEqualsOperator.php
    │   │   │       │   │   │   ├── NotEqualsOperator.php
    │   │   │       │   │   │   └── NotInOperator.php
    │   │   │       │   │   └── Strings/
    │   │   │       │   │       ├── LikeOperator.php
    │   │   │       │   │       └── NotLikeOperator.php
    │   │   │       │   ├── Parsers/
    │   │   │       │   │   └── FilterParser.php
    │   │   │       │   └── Validators/
    │   │   │       │       ├── FieldValidator.php
    │   │   │       │       ├── FilterValidator.php
    │   │   │       │       ├── OperatorValidator.php
    │   │   │       │       ├── SpecialOperatorValidator.php
    │   │   │       │       └── ValueValidator.php
    │   │   │       ├── Interfaces/
    │   │   │       │   ├── JsonApiResourceIdentifier.php
    │   │   │       │   └── JsonApiResponseInterface.php
    │   │   │       ├── Repositories/
    │   │   │       │   ├── FilterRepository.php
    │   │   │       │   └── RelationshipRepository.php
    │   │   │       └── Resource/
    │   │   │           ├── Relationship.php
    │   │   │           ├── Resource.php
    │   │   │           ├── ResourceIdentifier.php
    │   │   │           └── SuiteBeanResource.php
    │   │   ├── OAuth2/
    │   │   │   ├── README.md
    │   │   │   ├── Keys.php
    │   │   │   ├── .htaccess
    │   │   │   ├── Entities/
    │   │   │   │   ├── AccessTokenEntity.php
    │   │   │   │   ├── AuthCodeEntity.php
    │   │   │   │   ├── ClientEntity.php
    │   │   │   │   ├── RefreshTokenEntity.php
    │   │   │   │   ├── ScopeEntity.php
    │   │   │   │   └── UserEntity.php
    │   │   │   ├── Exception/
    │   │   │   │   ├── GrantTypeNotAllowedForClient.php
    │   │   │   │   └── OAuth2.php
    │   │   │   ├── Middleware/
    │   │   │   │   ├── AuthorizationServer.php
    │   │   │   │   └── ResourceServer.php
    │   │   │   └── Repositories/
    │   │   │       ├── AccessTokenRepository.php
    │   │   │       ├── AuthCodeRepository.php
    │   │   │       ├── ClientRepository.php
    │   │   │       ├── RefreshTokenRepository.php
    │   │   │       ├── ScopeRepository.php
    │   │   │       └── UserRepository.php
    │   │   ├── public/
    │   │   │   └── index.php
    │   │   └── v8/
    │   │       ├── swagger.json
    │   │       ├── callable/
    │   │       │   ├── README.md
    │   │       │   └── oauth2.php
    │   │       ├── container/
    │   │       │   ├── ApiController.php
    │   │       │   ├── ApplicationLanguage.php
    │   │       │   ├── AuthenticationController.php
    │   │       │   ├── AuthorizationServer.php
    │   │       │   ├── ByAttributesFilterInterpreters.php
    │   │       │   ├── ByIdFilterInterpreters.php
    │   │       │   ├── ByPreMadeFilterInterpreters.php
    │   │       │   ├── ConfigurationManager.php
    │   │       │   ├── cookie.php
    │   │       │   ├── current_user.php
    │   │       │   ├── CurrentLanguage.php
    │   │       │   ├── DatabaseManager.php
    │   │       │   ├── DateTimeConverter.php
    │   │       │   ├── FilterFieldOperators.php
    │   │       │   ├── FilterInterpreter.php
    │   │       │   ├── FilterOperators.php
    │   │       │   ├── FilterRepository.php
    │   │       │   ├── FilterSpecialOperators.php
    │   │       │   ├── JsonApi.php
    │   │       │   ├── Links.php
    │   │       │   ├── LoggerInterface.php
    │   │       │   ├── ModuleController.php
    │   │       │   ├── ModuleLanguage.php
    │   │       │   ├── ModulesLib.php
    │   │       │   ├── OAuth2Controller.php
    │   │       │   ├── Relationship.php
    │   │       │   ├── RelationshipRepository.php
    │   │       │   ├── Resource.php
    │   │       │   ├── ResourceIdentifier.php
    │   │       │   ├── ResourceServer.php
    │   │       │   ├── ResponseInterface.php
    │   │       │   ├── SchemaController.php
    │   │       │   ├── ServerRequestInterface.php
    │   │       │   └── SuiteBeanResource.php
    │   │       ├── Controller/
    │   │       │   ├── ApiController.php
    │   │       │   ├── ModuleController.php
    │   │       │   ├── OAuth2Controller.php
    │   │       │   └── SchemaController.php
    │   │       ├── Exception/
    │   │       │   ├── ApiException.php
    │   │       │   ├── BadRequestException.php
    │   │       │   ├── ConflictException.php
    │   │       │   ├── EmptyBodyException.php
    │   │       │   ├── ForbiddenException.php
    │   │       │   ├── IdAlreadyExistsException.php
    │   │       │   ├── InvalidJsonApiRequestException.php
    │   │       │   ├── InvalidJsonApiResponseException.php
    │   │       │   ├── ModuleNotFoundException.php
    │   │       │   ├── NotAcceptableException.php
    │   │       │   ├── NotAllowedException.php
    │   │       │   ├── NotFoundException.php
    │   │       │   ├── NotImplementedException.php
    │   │       │   ├── ReservedKeywordNotAllowedException.php
    │   │       │   └── UnsupportedMediaTypeException.php
    │   │       ├── Library/
    │   │       │   ├── ModulesLib.php
    │   │       │   └── UtilityLib.php
    │   │       └── route/
    │   │           ├── moduleRoutes.php
    │   │           ├── oauth2Routes.php
    │   │           └── schemaRoutes.php
    │   ├── Enumerator/
    │   │   └── ExceptionCode.php
    │   ├── Exception/
    │   │   ├── AccessDeniedException.php
    │   │   ├── Exception.php
    │   │   ├── InvalidArgumentException.php
    │   │   ├── MalwareFoundException.php
    │   │   ├── NotAllowedException.php
    │   │   └── NotFoundException.php
    │   ├── Interfaces/
    │   │   └── AntiMalwareFileScanner.php
    │   ├── Log/
    │   │   ├── CliLoggerFormatter.php
    │   │   ├── CliLoggerHandler.php
    │   │   └── SugarLoggerHandler.php
    │   ├── PDF/
    │   │   ├── PDFConfigurator.php
    │   │   ├── PDFEngine.php
    │   │   ├── PDFWrapper.php
    │   │   ├── Exceptions/
    │   │   │   ├── PDFEngineNotFoundException.php
    │   │   │   └── PDFException.php
    │   │   ├── LegacyMPDF/
    │   │   │   ├── configMapping.php
    │   │   │   └── LegacyMPDFEngine.php
    │   │   └── TCPDF/
    │   │       ├── configMapping.php
    │   │       ├── default.css
    │   │       ├── SuiteTCPDF.php
    │   │       └── TCPDFEngine.php
    │   ├── Robo/
    │   │   ├── config.php
    │   │   ├── Plugin/
    │   │   │   └── Commands/
    │   │   │       ├── ApiCommands.php
    │   │   │       ├── BuildCommands.php
    │   │   │       ├── CleanCacheCommands.php
    │   │   │       ├── CodeCoverageCommands.php
    │   │   │       ├── CodingStandardCommands.php
    │   │   │       ├── ElasticSearchCommands.php
    │   │   │       ├── RepairCommands.php
    │   │   │       ├── TestEnvironmentCommands.php
    │   │   │       ├── TestRunCommands.php
    │   │   │       └── UpgradeCommands.php
    │   │   └── Traits/
    │   │       ├── CliRunnerTrait.php
    │   │       └── RoboTrait.php
    │   ├── Search/
    │   │   ├── SearchConfigurator.php
    │   │   ├── SearchEngine.php
    │   │   ├── SearchModules.php
    │   │   ├── SearchQuery.php
    │   │   ├── SearchResults.php
    │   │   ├── SearchWrapper.php
    │   │   ├── AOD/
    │   │   │   └── LuceneSearchEngine.php
    │   │   ├── BasicSearch/
    │   │   │   └── BasicSearchEngine.php
    │   │   ├── ElasticSearch/
    │   │   │   ├── elasticsearch.example.json
    │   │   │   ├── ElasticSearchClientBuilder.php
    │   │   │   ├── ElasticSearchEngine.php
    │   │   │   ├── ElasticSearchHooks.php
    │   │   │   ├── ElasticSearchIndexer.php
    │   │   │   └── ElasticSearchModuleDataPuller.php
    │   │   ├── Exceptions/
    │   │   │   ├── SearchEngineNotFoundException.php
    │   │   │   ├── SearchException.php
    │   │   │   ├── SearchInvalidRequestException.php
    │   │   │   └── SearchUserFriendlyException.php
    │   │   ├── Index/
    │   │   │   ├── AbstractIndexer.php
    │   │   │   ├── IndexingLockFileTrait.php
    │   │   │   ├── IndexingSchedulerTrait.php
    │   │   │   ├── IndexingStatisticsTrait.php
    │   │   │   └── Documentify/
    │   │   │       ├── AbstractDocumentifier.php
    │   │   │       ├── JsonSerializerDocumentifier.php
    │   │   │       ├── SearchDefsDocumentifier.php
    │   │   │       └── SearchDefsDocumentifier.yml
    │   │   ├── SqlSearch/
    │   │   │   └── SimpleSqlSearchEngine.php
    │   │   └── UI/
    │   │       ├── SearchFormController.php
    │   │       ├── SearchFormView.php
    │   │       ├── SearchResultsController.php
    │   │       ├── SearchResultsView.php
    │   │       ├── SearchThrowableHandler.php
    │   │       ├── MVC/
    │   │       │   ├── Controller.php
    │   │       │   └── View.php
    │   │       └── templates/
    │   │           ├── search.form.tpl
    │   │           └── search.results.tpl
    │   └── Utility/
    │       ├── ApplicationLanguage.php
    │       ├── ArrayMapper.php
    │       ├── BeanJsonSerializer.php
    │       ├── BeanJsonSerializer.yml
    │       ├── Configuration.php
    │       ├── CurrentLanguage.php
    │       ├── ModuleLanguage.php
    │       ├── OperatingSystem.php
    │       ├── Paths.php
    │       ├── StringUtils.php
    │       ├── StringValidator.php
    │       ├── SuiteLogger.php
    │       ├── SuiteValidator.php
    │       └── AntiMalware/
    │           ├── AntiMalwareTrait.php
    │           ├── FileScanner.php
    │           └── Providers/
    │               ├── ClamTCP.php
    │               └── Sophos.php
    ├── metadata/
    │   ├── accounts_bugsMetaData.php
    │   ├── accounts_casesMetaData.php
    │   ├── accounts_contactsMetaData.php
    │   ├── accounts_opportunitiesMetaData.php
    │   ├── acl_roles_actionsMetaData.php
    │   ├── acl_roles_usersMetaData.php
    │   ├── addressBookMetaData.php
    │   ├── am_projecttemplates_contacts_1MetaData.php
    │   ├── am_projecttemplates_project_1MetaData.php
    │   ├── am_projecttemplates_users_1MetaData.php
    │   ├── am_tasktemplates_am_projecttemplatesMetaData.php
    │   ├── aok_knowledgebase_categoriesMetaData.php
    │   ├── aos_contracts_documentsMetaData.php
    │   ├── aos_quotes_aos_contractsMetaData.php
    │   ├── aos_quotes_aos_invoicesMetaData.php
    │   ├── aos_quotes_projectMetaData.php
    │   ├── aow_processed_aow_actionsMetaData.php
    │   ├── audit_templateMetaData.php
    │   ├── calls_contactsMetaData.php
    │   ├── calls_leadsMetaData.php
    │   ├── calls_usersMetaData.php
    │   ├── cases_bugsMetaData.php
    │   ├── configMetaData.php
    │   ├── contacts_bugsMetaData.php
    │   ├── contacts_casesMetaData.php
    │   ├── contacts_usersMetaData.php
    │   ├── cron_remove_documentsMetaData.php
    │   ├── custom_fieldsMetaData.php
    │   ├── documents_accountsMetaData.php
    │   ├── documents_bugsMetaData.php
    │   ├── documents_casesMetaData.php
    │   ├── documents_contactsMetaData.php
    │   ├── documents_opportunitiesMetaData.php
    │   ├── email_addressesMetaData.php
    │   ├── email_cacheMetaData.php
    │   ├── email_marketing_prospect_listsMetaData.php
    │   ├── emails_beansMetaData.php
    │   ├── emails_email_templatesMetaData.php
    │   ├── fields_meta_dataMetaData.php
    │   ├── foldersMetaData.php
    │   ├── fp_event_locations_fp_events_1MetaData.php
    │   ├── fp_events_contactsMetaData.php
    │   ├── fp_events_fp_event_delegates_1MetaData.php
    │   ├── fp_events_fp_event_locations_1MetaData.php
    │   ├── fp_events_leads_1MetaData.php
    │   ├── fp_events_prospects_1MetaData.php
    │   ├── import_mapsMetaData.php
    │   ├── inboundEmail_autoreplyMetaData.php
    │   ├── inboundEmail_cacheTimestampMetaData.php
    │   ├── jjwg_maps_jjwg_areasMetaData.php
    │   ├── jjwg_maps_jjwg_markersMetaData.php
    │   ├── kbdocuments_views_ratingsMetaData.php
    │   ├── linked_documentsMetaData.php
    │   ├── meetings_contactsMetaData.php
    │   ├── meetings_leadsMetaData.php
    │   ├── meetings_usersMetaData.php
    │   ├── oauth_nonce.php
    │   ├── opportunities_contactsMetaData.php
    │   ├── outboundEmailMetaData.php
    │   ├── project_bugsMetaData.php
    │   ├── project_casesMetaData.php
    │   ├── project_contacts_1MetaData.php
    │   ├── project_productsMetaData.php
    │   ├── project_relationMetaData.php
    │   ├── project_task_project_tasksMetaData.php
    │   ├── project_users_1MetaData.php
    │   ├── projects_accountsMetaData.php
    │   ├── projects_contactsMetaData.php
    │   ├── projects_opportunitiesMetaData.php
    │   ├── projects_quotesMetaData.php
    │   ├── prospect_list_campaignsMetaData.php
    │   ├── prospect_lists_prospectsMetaData.php
    │   ├── queues_beansMetaData.php
    │   ├── queues_queueMetaData.php
    │   ├── roles_modulesMetaData.php
    │   ├── roles_usersMetaData.php
    │   ├── schedulers_timesMetaData.php
    │   ├── securitygroups_acl_rolesMetaData.php
    │   ├── securitygroups_defaultsMetaData.php
    │   ├── securitygroups_recordsMetaData.php
    │   ├── securitygroups_usersMetaData.php
    │   ├── surveyquestionoptions_surveyquestionresponsesMetaData.php
    │   ├── user_feedsMetaData.php
    │   ├── users_last_importMetaData.php
    │   ├── users_passwordLinkMetaData.php
    │   ├── users_signaturesMetaData.php
    │   └── usersMetaData.php
    ├── ModuleInstall/
    │   ├── ExtensionManager.php
    │   ├── extensions.php
    │   ├── ModuleInstaller.php
    │   ├── ModuleScanner.php
    │   └── PackageManager/
    │       ├── ListViewPackages.php
    │       ├── PackageController.php
    │       ├── PackageManager.php
    │       ├── PackageManagerComm.php
    │       ├── PackageManagerDisplay.php
    │       ├── PackageManagerDownloader.php
    │       ├── metadata/
    │       │   └── listviewdefs.php
    │       └── tpls/
    │           ├── ModuleLoaderListView.tpl
    │           ├── PackageForm.tpl
    │           ├── PackageManagerLicense.tpl
    │           └── PackageManagerScripts.tpl
    ├── modules/
    │   ├── BeanDictionary.php
    │   ├── TableDictionary.php
    │   ├── Accounts/
    │   │   ├── Account.js
    │   │   ├── Account.php
    │   │   ├── AccountFormBase.php
    │   │   ├── AccountsJjwg_MapsLogicHook.php
    │   │   ├── AccountsListViewSmarty.php
    │   │   ├── AccountsQuickCreate.php
    │   │   ├── field_arrays.php
    │   │   ├── Menu.php
    │   │   ├── Popup_picker.html
    │   │   ├── Save.php
    │   │   ├── ShowDuplicates.html
    │   │   ├── ShowDuplicates.php
    │   │   ├── vardefs.php
    │   │   ├── Dashlets/
    │   │   │   └── MyAccountsDashlet/
    │   │   │       ├── MyAccountsDashlet.data.php
    │   │   │       ├── MyAccountsDashlet.meta.php
    │   │   │       └── MyAccountsDashlet.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── acldefs.php
    │   │   │   ├── additionalDetails.php
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── fieldGroups.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── metafiles.php
    │   │   │   ├── popupdefs.php
    │   │   │   ├── quickcreatedefs.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   ├── studio.php
    │   │   │   ├── subpaneldefs.php
    │   │   │   └── subpanels/
    │   │   │       ├── default.php
    │   │   │       ├── ForEmails.php
    │   │   │       └── ForProspectLists.php
    │   │   ├── tpls/
    │   │   │   └── QuickCreate.tpl
    │   │   └── views/
    │   │       ├── view.detail.php
    │   │       ├── view.edit.php
    │   │       └── view.list.php
    │   ├── ACL/
    │   │   ├── ACLController.php
    │   │   ├── ACLJSController.php
    │   │   ├── Forms.php
    │   │   ├── install_actions.php
    │   │   ├── List.php
    │   │   ├── Menu.php
    │   │   ├── remove_actions.php
    │   │   ├── Save.php
    │   │   ├── vardefs.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   └── metadata/
    │   │       └── subpaneldefs.php
    │   ├── ACLActions/
    │   │   ├── ACLAction.php
    │   │   ├── actiondefs.override.php
    │   │   ├── actiondefs.php
    │   │   ├── Forms.php
    │   │   ├── Menu.php
    │   │   ├── vardefs.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   └── metadata/
    │   │       └── subpaneldefs.php
    │   ├── ACLRoles/
    │   │   ├── ACLRole.php
    │   │   ├── ACLRoles.js
    │   │   ├── Delete.php
    │   │   ├── DetailUserAccess.php
    │   │   ├── DetailUserRole.php
    │   │   ├── DetailView.php
    │   │   ├── DetailView.tpl
    │   │   ├── DetailViewBody.tpl
    │   │   ├── DetailViewUser.tpl
    │   │   ├── EditAllBody.tpl
    │   │   ├── EditRole.php
    │   │   ├── EditRole.tpl
    │   │   ├── EditView.php
    │   │   ├── EditView.tpl
    │   │   ├── EditViewBody.tpl
    │   │   ├── Forms.php
    │   │   ├── ListUsers.php
    │   │   ├── Menu.php
    │   │   ├── popup.tpl
    │   │   ├── Popup_picker.html
    │   │   ├── Popup_picker.php
    │   │   ├── Save.php
    │   │   ├── vardefs.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── popupdefs.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   ├── subpaneldefs.php
    │   │   │   └── subpanels/
    │   │   │       ├── admin.php
    │   │   │       └── default.php
    │   │   └── views/
    │   │       ├── view.classic.php
    │   │       └── view.list.php
    │   ├── Activities/
    │   │   ├── config.php
    │   │   ├── EmailReminder.php
    │   │   ├── Forms.php
    │   │   ├── Menu.php
    │   │   ├── Popup_picker.php
    │   │   ├── SetAcceptStatus.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   └── subpaneldefs.php
    │   │   ├── tpls/
    │   │   │   ├── PopupBody.tpl
    │   │   │   ├── PopupFooter.tpl
    │   │   │   └── PopupHeader.tpl
    │   │   └── views/
    │   │       ├── view.list.php
    │   │       └── view.modulelistmenu.php
    │   ├── Administration/
    │   │   ├── action_view_map.php
    │   │   ├── Administration.php
    │   │   ├── AOPAdmin.php
    │   │   ├── AOPAdmin.tpl
    │   │   ├── AOSAdmin.php
    │   │   ├── AOSAdmin.tpl
    │   │   ├── Async.php
    │   │   ├── BusinessHours.php
    │   │   ├── BusinessHours.tpl
    │   │   ├── callJSRepair.php
    │   │   ├── clear_chart_cache.php
    │   │   ├── Common.php
    │   │   ├── controller.php
    │   │   ├── CustomizeFields.php
    │   │   ├── Development.php
    │   │   ├── Diagnostic.php
    │   │   ├── Diagnostic.tpl
    │   │   ├── DiagnosticDelete.php
    │   │   ├── DiagnosticDownload.php
    │   │   ├── DiagnosticRun.php
    │   │   ├── DisplayWarnings.php
    │   │   ├── ElasticSearchSettings.php
    │   │   ├── expandDatabase.php
    │   │   ├── ExportCustomFieldStructure.php
    │   │   ├── Forms.php
    │   │   ├── GoogleCalendarSettings.php
    │   │   ├── GoogleCalendarSettings.tpl
    │   │   ├── GoogleCalendarSettingsHandler.php
    │   │   ├── ImportCustomFieldStructure.php
    │   │   ├── index.html
    │   │   ├── index.php
    │   │   ├── index.tpl
    │   │   ├── Locale.php
    │   │   ├── Locale.tpl
    │   │   ├── Menu.php
    │   │   ├── ncc_config.php
    │   │   ├── PasswordManager.php
    │   │   ├── PasswordManager.tpl
    │   │   ├── PasswordManagerSecurity.tpl
    │   │   ├── PDFSettings.php
    │   │   ├── QuickRepairAndRebuild.php
    │   │   ├── RebuildAudit.php
    │   │   ├── RebuildConfig.php
    │   │   ├── RebuildDashlets.php
    │   │   ├── RebuildExpressionPlugins.php
    │   │   ├── RebuildFulltextIndices.php
    │   │   ├── RebuildJSLang.php
    │   │   ├── RebuildRelationship.php
    │   │   ├── RebuildSchedulers.php
    │   │   ├── RebuildSprites.php
    │   │   ├── RepairActivities.php
    │   │   ├── repairDatabase.php
    │   │   ├── RepairESIndex.php
    │   │   ├── RepairFieldCasing.php
    │   │   ├── RepairIE.php
    │   │   ├── RepairIndex.php
    │   │   ├── RepairJSFile.php
    │   │   ├── RepairSeedUsers.php
    │   │   ├── repairSelectModule.php
    │   │   ├── repairUniSearch.php
    │   │   ├── RepairUploadFolder.php
    │   │   ├── RepairUtfEncoding.php
    │   │   ├── RepairXSS.php
    │   │   ├── Save.php
    │   │   ├── SearchSettings.php
    │   │   ├── SugarSpriteBuilder.php
    │   │   ├── SyncInboundEmailAccounts.php
    │   │   ├── undoupdateclass.php
    │   │   ├── updateclass.php
    │   │   ├── Updater.html
    │   │   ├── Updater.php
    │   │   ├── updater_utils.php
    │   │   ├── updateTimezonePrefs.php
    │   │   ├── Upgrade.php
    │   │   ├── upgrade_custom_relationships.php
    │   │   ├── UpgradeAccess.php
    │   │   ├── UpgradeFields.php
    │   │   ├── UpgradeHistory.php
    │   │   ├── UpgradeIISAccess.php
    │   │   ├── UpgradeWizard.php
    │   │   ├── UpgradeWizard_commit.php
    │   │   ├── UpgradeWizard_prepare.php
    │   │   ├── UpgradeWizardCommon.php
    │   │   ├── vardefs.php
    │   │   ├── javascript/
    │   │   │   ├── Administration.js
    │   │   │   └── Async.js
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── adminpaneldefs.php
    │   │   │   └── SearchFields.php
    │   │   ├── PDF/
    │   │   │   ├── buttons.tpl
    │   │   │   ├── Controller.php
    │   │   │   ├── PDFView.php
    │   │   │   ├── view.tpl
    │   │   │   └── MVC/
    │   │   │       ├── Controller.php
    │   │   │       └── View.php
    │   │   ├── Search/
    │   │   │   ├── Controller.php
    │   │   │   ├── GlobalSearchSettings.tpl
    │   │   │   ├── View.php
    │   │   │   ├── view.tpl
    │   │   │   ├── ElasticSearch/
    │   │   │   │   ├── Controller.php
    │   │   │   │   ├── scripts.js
    │   │   │   │   ├── View.php
    │   │   │   │   └── view.tpl
    │   │   │   └── MVC/
    │   │   │       ├── Controller.php
    │   │   │       └── View.php
    │   │   ├── SyncInboundEmailAccounts/
    │   │   │   ├── SyncInboundEmailAccountsEmptyException.php
    │   │   │   ├── SyncInboundEmailAccountsException.php
    │   │   │   ├── SyncInboundEmailAccountsIMapConnectionException.php
    │   │   │   ├── SyncInboundEmailAccountsInvalidMethodTypeException.php
    │   │   │   ├── SyncInboundEmailAccountsInvalidSubActionArgumentsException.php
    │   │   │   ├── SyncInboundEmailAccountsNoMethodException.php
    │   │   │   ├── SyncInboundEmailAccountsPage.php
    │   │   │   └── SyncInboundEmailAccountsSubActionHandler.php
    │   │   ├── templates/
    │   │   │   ├── ConfigureAjaxUI.tpl
    │   │   │   ├── ConfigureTabs.tpl
    │   │   │   ├── Languages.tpl
    │   │   │   ├── QuickRepairAndRebuild.tpl
    │   │   │   ├── RebuildConfig.tpl
    │   │   │   ├── RebuildSprites.tpl
    │   │   │   ├── RepairDatabase.tpl
    │   │   │   ├── RepairUtfEncoding.tpl
    │   │   │   ├── RepairUtfEncodingStatus.tpl
    │   │   │   ├── RepairUtfEncodingSyncStatus.tpl
    │   │   │   ├── RepairXSS.tpl
    │   │   │   ├── ShortcutBar.tpl
    │   │   │   ├── SyncInboundEmailAccounts.tpl
    │   │   │   ├── themeConfigSettings.tpl
    │   │   │   └── themeSettings.tpl
    │   │   └── views/
    │   │       ├── view.backups.php
    │   │       ├── view.configureajaxui.php
    │   │       ├── view.configuretabs.php
    │   │       ├── view.globalsearchsettings.php
    │   │       ├── view.languages.php
    │   │       ├── view.repair.php
    │   │       ├── view.themeconfigsettings.php
    │   │       └── view.themesettings.php
    │   ├── Alerts/
    │   │   ├── Alert.php
    │   │   ├── controller.php
    │   │   ├── vardefs.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── defaultviewdefs.php
    │   │   │   ├── metafiles.php
    │   │   │   ├── popupdefs.php
    │   │   │   └── subpanels/
    │   │   │       └── default.php
    │   │   ├── templates/
    │   │   │   ├── default.tpl
    │   │   │   └── json.tpl
    │   │   └── views/
    │   │       ├── view.default.php
    │   │       └── view.json.php
    │   ├── AM_ProjectTemplates/
    │   │   ├── AM_ProjectTemplates.php
    │   │   ├── AM_ProjectTemplates_sugar.php
    │   │   ├── AM_ProjectTemplatesListViewData.php
    │   │   ├── AM_ProjectTemplatesListViewSmarty.php
    │   │   ├── controller.php
    │   │   ├── create_project.js
    │   │   ├── gantt.php
    │   │   ├── jsclass_scheduler.js
    │   │   ├── Menu.php
    │   │   ├── project_table.php
    │   │   ├── Save.php
    │   │   ├── vardefs.php
    │   │   ├── css/
    │   │   │   └── style.css
    │   │   ├── Dashlets/
    │   │   │   └── AM_ProjectTemplatesDashlet/
    │   │   │       ├── AM_ProjectTemplatesDashlet.meta.php
    │   │   │       └── AM_ProjectTemplatesDashlet.php
    │   │   ├── js/
    │   │   │   ├── custom_project.js
    │   │   │   ├── jquery.blockUI.js
    │   │   │   ├── main_lib.js
    │   │   │   └── splitter.js
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── additionalDetails.php
    │   │   │   ├── dashletviewdefs.php
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── metafiles.php
    │   │   │   ├── popupdefs.php
    │   │   │   ├── quickcreatedefs.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   ├── studio.php
    │   │   │   ├── subpaneldefs.php
    │   │   │   └── subpanels/
    │   │   │       └── default.php
    │   │   ├── tpls/
    │   │   │   ├── footer.tpl
    │   │   │   └── header.tpl
    │   │   └── views/
    │   │       ├── view.detail.php
    │   │       ├── view.edit.php
    │   │       └── view.ganttchart.php
    │   ├── AM_TaskTemplates/
    │   │   ├── AM_TaskTemplates.php
    │   │   ├── AM_TaskTemplates_sugar.php
    │   │   ├── vardefs.php
    │   │   ├── Dashlets/
    │   │   │   └── AM_TaskTemplatesDashlet/
    │   │   │       ├── AM_TaskTemplatesDashlet.meta.php
    │   │   │       └── AM_TaskTemplatesDashlet.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   └── metadata/
    │   │       ├── dashletviewdefs.php
    │   │       ├── detailviewdefs.php
    │   │       ├── editviewdefs.php
    │   │       ├── listviewdefs.php
    │   │       ├── metafiles.php
    │   │       ├── popupdefs.php
    │   │       ├── quickcreatedefs.php
    │   │       ├── searchdefs.php
    │   │       ├── SearchFields.php
    │   │       ├── studio.php
    │   │       └── subpanels/
    │   │           └── default.php
    │   ├── AOBH_BusinessHours/
    │   │   ├── AOBH_BusinessHours.php
    │   │   ├── Menu.php
    │   │   ├── vardefs.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   └── metadata/
    │   │       ├── dashletviewdefs.php
    │   │       ├── detailviewdefs.php
    │   │       ├── editviewdefs.php
    │   │       ├── listviewdefs.php
    │   │       ├── metafiles.php
    │   │       ├── popupdefs.php
    │   │       ├── quickcreatedefs.php
    │   │       ├── searchdefs.php
    │   │       ├── SearchFields.php
    │   │       └── subpanels/
    │   │           └── default.php
    │   ├── AOD_Index/
    │   │   ├── AOD_Index.php
    │   │   ├── AOD_Index_sugar.php
    │   │   ├── AOD_LogicHooks.php
    │   │   ├── controller.php
    │   │   ├── LuceneUtils.php
    │   │   ├── PdfParser.php
    │   │   ├── vardefs.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── Lib/
    │   │   │   └── Zend/
    │   │   │       └── Search/
    │   │   │           ├── Exception.php
    │   │   │           ├── Lucene.php
    │   │   │           └── Lucene/
    │   │   │               ├── Document.php
    │   │   │               ├── Exception.php
    │   │   │               ├── Field.php
    │   │   │               ├── FSM.php
    │   │   │               ├── FSMAction.php
    │   │   │               ├── Interface.php
    │   │   │               ├── LockManager.php
    │   │   │               ├── MultiSearcher.php
    │   │   │               ├── PriorityQueue.php
    │   │   │               ├── Proxy.php
    │   │   │               ├── TermStreamsPriorityQueue.php
    │   │   │               ├── Analysis/
    │   │   │               │   ├── Analyzer.php
    │   │   │               │   ├── Token.php
    │   │   │               │   ├── TokenFilter.php
    │   │   │               │   ├── Analyzer/
    │   │   │               │   │   ├── Common.php
    │   │   │               │   │   └── Common/
    │   │   │               │   │       ├── Text.php
    │   │   │               │   │       ├── TextNum.php
    │   │   │               │   │       ├── Utf8.php
    │   │   │               │   │       ├── Utf8Num.php
    │   │   │               │   │       ├── Text/
    │   │   │               │   │       │   └── CaseInsensitive.php
    │   │   │               │   │       ├── TextNum/
    │   │   │               │   │       │   └── CaseInsensitive.php
    │   │   │               │   │       ├── Utf8/
    │   │   │               │   │       │   └── CaseInsensitive.php
    │   │   │               │   │       └── Utf8Num/
    │   │   │               │   │           └── CaseInsensitive.php
    │   │   │               │   └── TokenFilter/
    │   │   │               │       ├── LowerCase.php
    │   │   │               │       ├── LowerCaseUtf8.php
    │   │   │               │       ├── ShortWords.php
    │   │   │               │       └── StopWords.php
    │   │   │               ├── Document/
    │   │   │               │   ├── Docx.php
    │   │   │               │   ├── Exception.php
    │   │   │               │   ├── Html.php
    │   │   │               │   ├── OpenXml.php
    │   │   │               │   ├── Pptx.php
    │   │   │               │   └── Xlsx.php
    │   │   │               ├── Index/
    │   │   │               │   ├── DictionaryLoader.php
    │   │   │               │   ├── DocsFilter.php
    │   │   │               │   ├── FieldInfo.php
    │   │   │               │   ├── SegmentInfo.php
    │   │   │               │   ├── SegmentMerger.php
    │   │   │               │   ├── SegmentWriter.php
    │   │   │               │   ├── Term.php
    │   │   │               │   ├── TermInfo.php
    │   │   │               │   ├── TermsPriorityQueue.php
    │   │   │               │   ├── Writer.php
    │   │   │               │   ├── SegmentWriter/
    │   │   │               │   │   ├── DocumentWriter.php
    │   │   │               │   │   └── StreamWriter.php
    │   │   │               │   └── TermsStream/
    │   │   │               │       └── Interface.php
    │   │   │               ├── Interface/
    │   │   │               │   └── MultiSearcher.php
    │   │   │               ├── Search/
    │   │   │               │   ├── BooleanExpressionRecognizer.php
    │   │   │               │   ├── Query.php
    │   │   │               │   ├── QueryEntry.php
    │   │   │               │   ├── QueryHit.php
    │   │   │               │   ├── QueryLexer.php
    │   │   │               │   ├── QueryParser.php
    │   │   │               │   ├── QueryParserContext.php
    │   │   │               │   ├── QueryParserException.php
    │   │   │               │   ├── QueryToken.php
    │   │   │               │   ├── Similarity.php
    │   │   │               │   ├── Weight.php
    │   │   │               │   ├── Highlighter/
    │   │   │               │   │   ├── Default.php
    │   │   │               │   │   └── Interface.php
    │   │   │               │   ├── Query/
    │   │   │               │   │   ├── Boolean.php
    │   │   │               │   │   ├── Empty.php
    │   │   │               │   │   ├── Fuzzy.php
    │   │   │               │   │   ├── Insignificant.php
    │   │   │               │   │   ├── MultiTerm.php
    │   │   │               │   │   ├── Phrase.php
    │   │   │               │   │   ├── Preprocessing.php
    │   │   │               │   │   ├── Range.php
    │   │   │               │   │   ├── Term.php
    │   │   │               │   │   ├── Wildcard.php
    │   │   │               │   │   └── Preprocessing/
    │   │   │               │   │       ├── Fuzzy.php
    │   │   │               │   │       ├── Phrase.php
    │   │   │               │   │       └── Term.php
    │   │   │               │   ├── QueryEntry/
    │   │   │               │   │   ├── Phrase.php
    │   │   │               │   │   ├── Subquery.php
    │   │   │               │   │   └── Term.php
    │   │   │               │   ├── Similarity/
    │   │   │               │   │   └── Default.php
    │   │   │               │   └── Weight/
    │   │   │               │       ├── Boolean.php
    │   │   │               │       ├── Empty.php
    │   │   │               │       ├── MultiTerm.php
    │   │   │               │       ├── Phrase.php
    │   │   │               │       └── Term.php
    │   │   │               └── Storage/
    │   │   │                   ├── Directory.php
    │   │   │                   ├── File.php
    │   │   │                   ├── Directory/
    │   │   │                   │   └── Filesystem.php
    │   │   │                   └── File/
    │   │   │                       ├── Filesystem.php
    │   │   │                       └── Memory.php
    │   │   ├── metadata/
    │   │   │   ├── dashletviewdefs.php
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── metafiles.php
    │   │   │   ├── popupdefs.php
    │   │   │   ├── quickcreatedefs.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   └── subpanels/
    │   │   │       └── default.php
    │   │   ├── tpls/
    │   │   │   └── indexdata.tpl
    │   │   └── views/
    │   │       └── view.indexdata.php
    │   ├── AOD_IndexEvent/
    │   │   ├── AOD_IndexEvent.php
    │   │   ├── AOD_IndexEvent_sugar.php
    │   │   ├── vardefs.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   └── metadata/
    │   │       ├── dashletviewdefs.php
    │   │       ├── detailviewdefs.php
    │   │       ├── editviewdefs.php
    │   │       ├── listviewdefs.php
    │   │       ├── metafiles.php
    │   │       ├── popupdefs.php
    │   │       ├── quickcreatedefs.php
    │   │       ├── searchdefs.php
    │   │       ├── SearchFields.php
    │   │       └── subpanels/
    │   │           └── default.php
    │   ├── AOK_Knowledge_Base_Categories/
    │   │   ├── AOK_Knowledge_Base_Categories.php
    │   │   ├── AOK_Knowledge_Base_Categories_sugar.php
    │   │   ├── Menu.php
    │   │   ├── vardefs.php
    │   │   ├── Dashlets/
    │   │   │   └── AOK_Knowledge_Base_CategoriesDashlet/
    │   │   │       ├── AOK_Knowledge_Base_CategoriesDashlet.meta.php
    │   │   │       └── AOK_Knowledge_Base_CategoriesDashlet.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   └── metadata/
    │   │       ├── dashletviewdefs.php
    │   │       ├── detailviewdefs.php
    │   │       ├── editviewdefs.php
    │   │       ├── listviewdefs.php
    │   │       ├── metafiles.php
    │   │       ├── popupdefs.php
    │   │       ├── quickcreatedefs.php
    │   │       ├── searchdefs.php
    │   │       ├── SearchFields.php
    │   │       ├── studio.php
    │   │       ├── subpaneldefs.php
    │   │       └── subpanels/
    │   │           └── default.php
    │   ├── AOK_KnowledgeBase/
    │   │   ├── AOK_KnowledgeBase.php
    │   │   ├── AOK_KnowledgeBase_sugar.php
    │   │   ├── AOK_KnowledgeBase_SuggestionBox.js
    │   │   ├── Menu.php
    │   │   ├── vardefs.php
    │   │   ├── Dashlets/
    │   │   │   └── AOK_KnowledgeBaseDashlet/
    │   │   │       ├── AOK_KnowledgeBaseDashlet.meta.php
    │   │   │       └── AOK_KnowledgeBaseDashlet.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── dashletviewdefs.php
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── metafiles.php
    │   │   │   ├── popupdefs.php
    │   │   │   ├── quickcreatedefs.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   ├── studio.php
    │   │   │   ├── subpaneldefs.php
    │   │   │   └── subpanels/
    │   │   │       └── default.php
    │   │   └── views/
    │   │       ├── view.detail.php
    │   │       └── view.edit.php
    │   ├── AOP_Case_Events/
    │   │   ├── AOP_Case_Events.php
    │   │   ├── CaseEventsHook.php
    │   │   ├── vardefs.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   └── metadata/
    │   │       ├── dashletviewdefs.php
    │   │       ├── detailviewdefs.php
    │   │       ├── editviewdefs.php
    │   │       ├── listviewdefs.php
    │   │       ├── metafiles.php
    │   │       ├── popupdefs.php
    │   │       ├── quickcreatedefs.php
    │   │       ├── searchdefs.php
    │   │       └── SearchFields.php
    │   ├── AOP_Case_Updates/
    │   │   ├── AOP_Case_Updates.php
    │   │   ├── AOPAssignManager.php
    │   │   ├── Case_Updates.php
    │   │   ├── CaseUpdatesHook.php
    │   │   ├── util.php
    │   │   ├── vardefs.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── dashletviewdefs.php
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── metafiles.php
    │   │   │   ├── popupdefs.php
    │   │   │   ├── quickcreatedefs.php
    │   │   │   ├── searchdefs.php
    │   │   │   └── SearchFields.php
    │   │   └── tpl/
    │   │       └── caseUpdateForm.tpl
    │   ├── AOR_Charts/
    │   │   ├── AOR_Chart.php
    │   │   ├── chartLines.js
    │   │   ├── controller.php
    │   │   ├── vardefs.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   └── lib/
    │   │       └── pChart/
    │   │           ├── imagemap.js
    │   │           ├── pChart.php
    │   │           ├── class/
    │   │           │   ├── pBarcode128.class.php
    │   │           │   ├── pBarcode39.class.php
    │   │           │   ├── pBubble.class.php
    │   │           │   ├── pCache.class.php
    │   │           │   ├── pData.class.php
    │   │           │   ├── pDraw.class.php
    │   │           │   ├── pImage.class.php
    │   │           │   ├── pIndicator.class.php
    │   │           │   ├── pPie.class.php
    │   │           │   ├── pRadar.class.php
    │   │           │   ├── pScatter.class.php
    │   │           │   ├── pSplit.class.php
    │   │           │   ├── pSpring.class.php
    │   │           │   ├── pStock.class.php
    │   │           │   └── pSurface.class.php
    │   │           ├── fonts/
    │   │           │   ├── advent_light.ttf
    │   │           │   ├── Bedizen.ttf
    │   │           │   ├── calibri.ttf
    │   │           │   ├── Forgotte.ttf
    │   │           │   ├── GeosansLight.ttf
    │   │           │   ├── MankSans.ttf
    │   │           │   ├── pf_arma_five.ttf
    │   │           │   ├── Silkscreen.ttf
    │   │           │   └── verdana.ttf
    │   │           └── palettes/
    │   │               ├── autumn.color
    │   │               ├── blind.color
    │   │               ├── evening.color
    │   │               ├── kitchen.color
    │   │               ├── light.color
    │   │               ├── navy.color
    │   │               ├── shade.color
    │   │               ├── spring.color
    │   │               └── summer.color
    │   ├── AOR_Conditions/
    │   │   ├── AOR_Condition.php
    │   │   ├── conditionLines.js
    │   │   ├── conditionLines.php
    │   │   ├── vardefs.php
    │   │   └── language/
    │   │       └── en_us.lang.php
    │   ├── AOR_Fields/
    │   │   ├── AOR_Field.php
    │   │   ├── fieldLines.js
    │   │   ├── fieldLines.php
    │   │   ├── vardefs.php
    │   │   └── language/
    │   │       └── en_us.lang.php
    │   ├── AOR_Reports/
    │   │   ├── AOR_Report.js
    │   │   ├── AOR_Report.php
    │   │   ├── AOR_Report_After.js
    │   │   ├── AOR_Report_Before.js
    │   │   ├── aor_utils.php
    │   │   ├── controller.php
    │   │   ├── Menu.php
    │   │   ├── vardefs.php
    │   │   ├── Dashlets/
    │   │   │   └── AORReportsDashlet/
    │   │   │       ├── AORReportsDashlet.js
    │   │   │       ├── AORReportsDashlet.meta.php
    │   │   │       ├── AORReportsDashlet.php
    │   │   │       ├── dashlet.tpl
    │   │   │       └── dashletConfigure.tpl
    │   │   ├── js/
    │   │   │   ├── Chart.js
    │   │   │   └── jqtree/
    │   │   │       ├── jqtree.css
    │   │   │       └── tree.jquery.js
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── metafiles.php
    │   │   │   ├── popupdefs.php
    │   │   │   ├── quickcreatedefs.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   ├── studio.php
    │   │   │   ├── subpaneldefs.php
    │   │   │   └── subpanels/
    │   │   │       └── default.php
    │   │   ├── pdf/
    │   │   │   └── pdf.css
    │   │   ├── tpls/
    │   │   │   ├── EditViewFooter.tpl
    │   │   │   ├── EditViewHeader.tpl
    │   │   │   └── report.tpl
    │   │   └── views/
    │   │       ├── view.detail.php
    │   │       └── view.edit.php
    │   ├── AOR_Scheduled_Reports/
    │   │   ├── AOR_Scheduled_Reports.php
    │   │   ├── emailRecipients.js
    │   │   ├── emailRecipients.php
    │   │   ├── Menu.php
    │   │   ├── vardefs.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── lib/
    │   │   │   └── Cron/
    │   │   │       ├── AbstractField.php
    │   │   │       ├── CronExpression.php
    │   │   │       ├── DayOfMonthField.php
    │   │   │       ├── DayOfWeekField.php
    │   │   │       ├── FieldFactory.php
    │   │   │       ├── FieldInterface.php
    │   │   │       ├── HoursField.php
    │   │   │       ├── includeCron.php
    │   │   │       ├── MinutesField.php
    │   │   │       ├── MonthField.php
    │   │   │       └── YearField.php
    │   │   └── metadata/
    │   │       ├── dashletviewdefs.php
    │   │       ├── detailviewdefs.php
    │   │       ├── editviewdefs.php
    │   │       ├── listviewdefs.php
    │   │       ├── metafiles.php
    │   │       ├── popupdefs.php
    │   │       ├── quickcreatedefs.php
    │   │       ├── searchdefs.php
    │   │       ├── SearchFields.php
    │   │       ├── studio.php
    │   │       ├── subpaneldefs.php
    │   │       └── subpanels/
    │   │           └── default.php
    │   ├── AOS_Contracts/
    │   │   ├── AOS_Contracts.php
    │   │   ├── AOS_Contracts_sugar.php
    │   │   ├── controller.php
    │   │   ├── Forms.php
    │   │   ├── Menu.php
    │   │   ├── vardefs.php
    │   │   ├── Dashlets/
    │   │   │   └── AOS_ContractsDashlet/
    │   │   │       ├── AOS_ContractsDashlet.meta.php
    │   │   │       └── AOS_ContractsDashlet.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── dashletviewdefs.php
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── metafiles.php
    │   │   │   ├── popupdefs.php
    │   │   │   ├── quickcreatedefs.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   ├── sidecreateviewdefs.php
    │   │   │   ├── studio.php
    │   │   │   ├── subpaneldefs.php
    │   │   │   └── subpanels/
    │   │   │       └── default.php
    │   │   └── views/
    │   │       └── view.detail.php
    │   ├── AOS_Invoices/
    │   │   ├── AOS_Invoices.php
    │   │   ├── AOS_Invoices_sugar.php
    │   │   ├── controller.php
    │   │   ├── Forms.php
    │   │   ├── Menu.php
    │   │   ├── vardefs.php
    │   │   ├── Dashlets/
    │   │   │   └── AOS_InvoicesDashlet/
    │   │   │       ├── AOS_InvoicesDashlet.meta.php
    │   │   │       └── AOS_InvoicesDashlet.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── dashletviewdefs.php
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── metafiles.php
    │   │   │   ├── popupdefs.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   ├── sidecreateviewdefs.php
    │   │   │   ├── studio.php
    │   │   │   ├── subpaneldefs.php
    │   │   │   └── subpanels/
    │   │   │       └── default.php
    │   │   └── views/
    │   │       ├── view.detail.php
    │   │       └── view.edit.php
    │   ├── AOS_Line_Item_Groups/
    │   │   ├── AOS_Line_Item_Groups.php
    │   │   ├── AOS_Line_Item_Groups_sugar.php
    │   │   ├── vardefs.php
    │   │   └── language/
    │   │       └── en_us.lang.php
    │   ├── AOS_PDF_Templates/
    │   │   ├── AOS_PDF_Templates.js
    │   │   ├── AOS_PDF_Templates.php
    │   │   ├── AOS_PDF_Templates_sugar.php
    │   │   ├── formLetter.php
    │   │   ├── formLetterPdf.php
    │   │   ├── Forms.php
    │   │   ├── generatePdf.php
    │   │   ├── Menu.php
    │   │   ├── sendEmail.php
    │   │   ├── templateParser.php
    │   │   ├── TemplateSampleService.php
    │   │   ├── vardefs.php
    │   │   ├── Dashlets/
    │   │   │   └── AOS_PDF_TemplatesDashlet/
    │   │   │       ├── AOS_PDF_TemplatesDashlet.meta.php
    │   │   │       └── AOS_PDF_TemplatesDashlet.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── dashletviewdefs.php
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── metafiles.php
    │   │   │   ├── popupdefs.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   ├── sidecreateviewdefs.php
    │   │   │   ├── studio.php
    │   │   │   └── subpanels/
    │   │   │       └── default.php
    │   │   ├── samples/
    │   │   │   ├── smpl_Account_Sample.php
    │   │   │   ├── smpl_Contact_Sample.php
    │   │   │   ├── smpl_Invoice_Group_Sample.php
    │   │   │   ├── smpl_Invoice_Sample.php
    │   │   │   ├── smpl_Lead_Sample.php
    │   │   │   ├── smpl_Quote_Group_Sample.php
    │   │   │   └── smpl_Quote_Sample.php
    │   │   └── views/
    │   │       ├── view.detail.php
    │   │       └── view.edit.php
    │   ├── AOS_Product_Categories/
    │   │   ├── AOS_Product_Categories.php
    │   │   ├── AOS_Product_Categories_sugar.php
    │   │   ├── Menu.php
    │   │   ├── vardefs.php
    │   │   ├── Dashlets/
    │   │   │   └── AOS_Product_CategoriesDashlet/
    │   │   │       ├── AOS_Product_CategoriesDashlet.meta.php
    │   │   │       └── AOS_Product_CategoriesDashlet.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── dashletviewdefs.php
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── metafiles.php
    │   │   │   ├── popupdefs.php
    │   │   │   ├── quickcreatedefs.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   ├── studio.php
    │   │   │   ├── subpaneldefs.php
    │   │   │   └── subpanels/
    │   │   │       └── default.php
    │   │   └── views/
    │   │       └── view.edit.php
    │   ├── AOS_Products/
    │   │   ├── AOS_Products.php
    │   │   ├── AOS_Products_sugar.php
    │   │   ├── controller.php
    │   │   ├── Forms.php
    │   │   ├── Menu.php
    │   │   ├── vardefs.php
    │   │   ├── Dashlets/
    │   │   │   └── AOS_ProductsDashlet/
    │   │   │       ├── AOS_ProductsDashlet.meta.php
    │   │   │       └── AOS_ProductsDashlet.php
    │   │   ├── js/
    │   │   │   └── products.js
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── dashletviewdefs.php
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── metafiles.php
    │   │   │   ├── popupdefs.php
    │   │   │   ├── quickcreatedefs.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   ├── sidecreateviewdefs.php
    │   │   │   ├── studio.php
    │   │   │   ├── subpaneldefs.php
    │   │   │   └── subpanels/
    │   │   │       ├── default.php
    │   │   │       └── ForCustomersPurchasedProducts.php
    │   │   ├── tpls/
    │   │   │   └── EditViewHeader.tpl
    │   │   └── views/
    │   │       └── view.edit.php
    │   ├── AOS_Products_Quotes/
    │   │   ├── AOS_Products_Quotes.php
    │   │   ├── AOS_Products_Quotes_sugar.php
    │   │   ├── AOS_Utils.php
    │   │   ├── Forms.php
    │   │   ├── line_items.js
    │   │   ├── Line_Items.php
    │   │   ├── Menu.php
    │   │   ├── vardefs.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   └── metadata/
    │   │       ├── detailviewdefs.php
    │   │       ├── editviewdefs.php
    │   │       ├── lineitemeditviewdefs.php
    │   │       ├── listviewdefs.php
    │   │       ├── metafiles.php
    │   │       ├── studio.php
    │   │       └── subpanels/
    │   │           ├── default.php
    │   │           └── ForAccounts.php
    │   ├── AOS_Quotes/
    │   │   ├── AOS_Quotes.php
    │   │   ├── AOS_Quotes_sugar.php
    │   │   ├── controller.php
    │   │   ├── converToInvoice.php
    │   │   ├── createContract.php
    │   │   ├── createOpportunity.php
    │   │   ├── Forms.php
    │   │   ├── Menu.php
    │   │   ├── vardefs.php
    │   │   ├── Dashlets/
    │   │   │   └── AOS_QuotesDashlet/
    │   │   │       ├── AOS_QuotesDashlet.meta.php
    │   │   │       └── AOS_QuotesDashlet.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── dashletviewdefs.php
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── metafiles.php
    │   │   │   ├── popupdefs.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   ├── sidecreateviewdefs.php
    │   │   │   ├── studio.php
    │   │   │   ├── subpaneldefs.php
    │   │   │   └── subpanels/
    │   │   │       ├── default.php
    │   │   │       └── ForProductPurchases.php
    │   │   ├── templates/
    │   │   │   ├── showPopupWithOutTemplates.tpl
    │   │   │   └── showPopupWithTemplates.tpl
    │   │   └── views/
    │   │       ├── view.detail.php
    │   │       └── view.edit.php
    │   ├── AOW_Actions/
    │   │   ├── actionLines.js
    │   │   ├── actionLines.php
    │   │   ├── actions.php
    │   │   ├── AOW_Action.php
    │   │   ├── FormulaCalculator.php
    │   │   ├── vardefs.php
    │   │   ├── actions/
    │   │   │   ├── actionBase.php
    │   │   │   ├── actionComputeField.css
    │   │   │   ├── actionComputeField.js
    │   │   │   ├── actionComputeField.php
    │   │   │   ├── actionCreateRecord.js
    │   │   │   ├── actionCreateRecord.php
    │   │   │   ├── actionModifyRecord.php
    │   │   │   ├── actionSendEmail.js
    │   │   │   ├── actionSendEmail.php
    │   │   │   └── templateParser.php
    │   │   └── language/
    │   │       └── en_us.lang.php
    │   ├── AOW_Conditions/
    │   │   ├── AOW_Condition.php
    │   │   ├── conditionLines.js
    │   │   ├── conditionLines.php
    │   │   ├── vardefs.php
    │   │   └── language/
    │   │       └── en_us.lang.php
    │   ├── AOW_Processed/
    │   │   ├── AOW_Processed.php
    │   │   ├── Menu.php
    │   │   ├── vardefs.php
    │   │   ├── Dashlets/
    │   │   │   └── AOW_ProcessedDashlet/
    │   │   │       ├── AOW_ProcessedDashlet.meta.php
    │   │   │       └── AOW_ProcessedDashlet.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── dashletviewdefs.php
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── metafiles.php
    │   │   │   ├── popupdefs.php
    │   │   │   ├── quickcreatedefs.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   └── subpanels/
    │   │   │       └── default.php
    │   │   └── views/
    │   │       └── view.list.php
    │   ├── AOW_WorkFlow/
    │   │   ├── aow_utils.php
    │   │   ├── AOW_WorkFlow.php
    │   │   ├── controller.php
    │   │   ├── Menu.php
    │   │   ├── vardefs.php
    │   │   ├── Dashlets/
    │   │   │   └── AOW_WorkFlowDashlet/
    │   │   │       ├── AOW_WorkFlowDashlet.meta.php
    │   │   │       └── AOW_WorkFlowDashlet.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   └── metadata/
    │   │       ├── dashletviewdefs.php
    │   │       ├── detailviewdefs.php
    │   │       ├── editviewdefs.php
    │   │       ├── listviewdefs.php
    │   │       ├── metafiles.php
    │   │       ├── popupdefs.php
    │   │       ├── quickcreatedefs.php
    │   │       ├── searchdefs.php
    │   │       ├── SearchFields.php
    │   │       ├── subpaneldefs.php
    │   │       └── subpanels/
    │   │           └── default.php
    │   ├── Audit/
    │   │   ├── Audit.php
    │   │   ├── field_assoc.php
    │   │   ├── Popup_picker.html
    │   │   ├── Popup_picker.php
    │   │   ├── vardefs.php
    │   │   └── language/
    │   │       └── en_us.lang.php
    │   ├── Bugs/
    │   │   ├── Bug.php
    │   │   ├── BugsQuickCreate.php
    │   │   ├── field_arrays.php
    │   │   ├── Menu.php
    │   │   ├── vardefs.php
    │   │   ├── Dashlets/
    │   │   │   └── MyBugsDashlet/
    │   │   │       ├── MyBugsDashlet.data.php
    │   │   │       ├── MyBugsDashlet.meta.php
    │   │   │       └── MyBugsDashlet.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── additionalDetails.php
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── metafiles.php
    │   │   │   ├── popupdefs.php
    │   │   │   ├── quickcreatedefs.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   ├── studio.php
    │   │   │   ├── subpaneldefs.php
    │   │   │   └── subpanels/
    │   │   │       ├── default.php
    │   │   │       └── ForEmails.php
    │   │   ├── tpls/
    │   │   │   └── QuickCreate.tpl
    │   │   └── views/
    │   │       ├── view.detail.php
    │   │       └── view.edit.php
    │   ├── Calendar/
    │   │   ├── action_view_map.php
    │   │   ├── Cal.js
    │   │   ├── Calendar.php
    │   │   ├── CalendarActivity.php
    │   │   ├── CalendarDisplay.php
    │   │   ├── CalendarGrid.php
    │   │   ├── CalendarUtils.php
    │   │   ├── controller.php
    │   │   ├── index.php
    │   │   ├── Menu.php
    │   │   ├── processScreenSize.php
    │   │   ├── Dashlets/
    │   │   │   └── CalendarDashlet/
    │   │   │       ├── CalendarDashlet.en_us.lang.php
    │   │   │       ├── CalendarDashlet.meta.php
    │   │   │       ├── CalendarDashlet.php
    │   │   │       └── CalendarDashletOptions.tpl
    │   │   ├── fullcalendar/
    │   │   │   ├── fullcalendar.css
    │   │   │   ├── fullcalendar.js
    │   │   │   ├── fullcalendar.print.css
    │   │   │   ├── gcal.js
    │   │   │   ├── license.txt
    │   │   │   ├── locale-all.js
    │   │   │   └── locale/
    │   │   │       ├── af.js
    │   │   │       ├── ar-dz.js
    │   │   │       ├── ar-kw.js
    │   │   │       ├── ar-ly.js
    │   │   │       ├── ar-ma.js
    │   │   │       ├── ar-sa.js
    │   │   │       ├── ar-tn.js
    │   │   │       ├── ar.js
    │   │   │       ├── be.js
    │   │   │       ├── bg.js
    │   │   │       ├── bs.js
    │   │   │       ├── ca.js
    │   │   │       ├── cs.js
    │   │   │       ├── da.js
    │   │   │       ├── de-at.js
    │   │   │       ├── de-ch.js
    │   │   │       ├── de.js
    │   │   │       ├── el.js
    │   │   │       ├── en-au.js
    │   │   │       ├── en-ca.js
    │   │   │       ├── en-gb.js
    │   │   │       ├── en-ie.js
    │   │   │       ├── en-nz.js
    │   │   │       ├── es-do.js
    │   │   │       ├── es-us.js
    │   │   │       ├── es.js
    │   │   │       ├── et.js
    │   │   │       ├── eu.js
    │   │   │       ├── fa.js
    │   │   │       ├── fi.js
    │   │   │       ├── fr-ca.js
    │   │   │       ├── fr-ch.js
    │   │   │       ├── fr.js
    │   │   │       ├── gl.js
    │   │   │       ├── he.js
    │   │   │       ├── hi.js
    │   │   │       ├── hr.js
    │   │   │       ├── hu.js
    │   │   │       ├── id.js
    │   │   │       ├── is.js
    │   │   │       ├── it.js
    │   │   │       ├── ja.js
    │   │   │       ├── ka.js
    │   │   │       ├── kk.js
    │   │   │       ├── ko.js
    │   │   │       ├── lb.js
    │   │   │       ├── lt.js
    │   │   │       ├── lv.js
    │   │   │       ├── mk.js
    │   │   │       ├── ms-my.js
    │   │   │       ├── ms.js
    │   │   │       ├── nb.js
    │   │   │       ├── nl-be.js
    │   │   │       ├── nl.js
    │   │   │       ├── nn.js
    │   │   │       ├── pl.js
    │   │   │       ├── pt-br.js
    │   │   │       ├── pt.js
    │   │   │       ├── ro.js
    │   │   │       ├── ru.js
    │   │   │       ├── sk.js
    │   │   │       ├── sl.js
    │   │   │       ├── sq.js
    │   │   │       ├── sr-cyrl.js
    │   │   │       ├── sr.js
    │   │   │       ├── sv.js
    │   │   │       ├── th.js
    │   │   │       ├── tr.js
    │   │   │       ├── uk.js
    │   │   │       ├── vi.js
    │   │   │       ├── zh-cn.js
    │   │   │       ├── zh-hk.js
    │   │   │       └── zh-tw.js
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── tpls/
    │   │   │   ├── editHeader.tpl
    │   │   │   ├── empty.tpl
    │   │   │   ├── footer.tpl
    │   │   │   ├── form.tpl
    │   │   │   ├── header.tpl
    │   │   │   ├── main.tpl
    │   │   │   ├── repeat.tpl
    │   │   │   ├── settings.tpl
    │   │   │   └── shared_users.tpl
    │   │   └── views/
    │   │       ├── view.createinvitee.php
    │   │       ├── view.getgr.php
    │   │       ├── view.getgrusers.php
    │   │       ├── view.json.php
    │   │       ├── view.quickedit.php
    │   │       └── view.savesettings.php
    │   ├── Calls/
    │   │   ├── Call.php
    │   │   ├── CallFormBase.php
    │   │   ├── CallHelper.php
    │   │   ├── CallsQuickCreate.php
    │   │   ├── field_arrays.php
    │   │   ├── Menu.php
    │   │   ├── Reschedule.php
    │   │   ├── reschedule_history.php
    │   │   ├── Save.php
    │   │   ├── SubPanelViewInvitees.html
    │   │   ├── SubPanelViewInvitees.php
    │   │   ├── vardefs.php
    │   │   ├── Dashlets/
    │   │   │   └── MyCallsDashlet/
    │   │   │       ├── MyCallsDashlet.data.php
    │   │   │       ├── MyCallsDashlet.meta.php
    │   │   │       └── MyCallsDashlet.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── additionalDetails.php
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── quickcreatedefs.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   ├── studio.php
    │   │   │   ├── subpaneldefs.php
    │   │   │   └── subpanels/
    │   │   │       ├── default.php
    │   │   │       ├── ForActivities.php
    │   │   │       └── ForHistory.php
    │   │   ├── tpls/
    │   │   │   ├── additionalDetails.body.tpl
    │   │   │   ├── additionalDetails.caption.tpl
    │   │   │   ├── detailHeader.tpl
    │   │   │   ├── footer.tpl
    │   │   │   ├── header.tpl
    │   │   │   └── QuickCreate.tpl
    │   │   └── views/
    │   │       ├── view.edit.php
    │   │       └── view.list.php
    │   ├── Calls_Reschedule/
    │   │   ├── Calls_Reschedule.php
    │   │   ├── Calls_Reschedule_sugar.php
    │   │   ├── Menu.php
    │   │   ├── reschedule_count.php
    │   │   ├── reschedule_form.js
    │   │   ├── Reschedule_popup.php
    │   │   ├── vardefs.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   └── metadata/
    │   │       ├── dashletviewdefs.php
    │   │       ├── detailviewdefs.php
    │   │       ├── editviewdefs.php
    │   │       ├── listviewdefs.php
    │   │       ├── metafiles.php
    │   │       ├── popupdefs.php
    │   │       ├── quickcreatedefs.php
    │   │       ├── searchdefs.php
    │   │       ├── SearchFields.php
    │   │       └── subpanels/
    │   │           └── default.php
    │   ├── CampaignLog/
    │   │   ├── CampaignLog.php
    │   │   ├── Menu.php
    │   │   ├── Popup_picker.html
    │   │   ├── Popup_picker.php
    │   │   ├── vardefs.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   └── metadata/
    │   │       └── subpanels/
    │   │           ├── default.php
    │   │           └── ForTargets.php
    │   ├── Campaigns/
    │   │   ├── action_file_map.php
    │   │   ├── Campaign.php
    │   │   ├── CampaignDiagnostic.html
    │   │   ├── CampaignDiagnostic.php
    │   │   ├── CaptchaValidate.php
    │   │   ├── chart.tpl
    │   │   ├── Charts.php
    │   │   ├── Charts1.php
    │   │   ├── controller.php
    │   │   ├── Delete.php
    │   │   ├── DeleteTestCampaigns.php
    │   │   ├── DetailView.js
    │   │   ├── DotListWizardMenu.php
    │   │   ├── EmailQueue.php
    │   │   ├── field_arrays.php
    │   │   ├── GenerateWebToLeadForm.php
    │   │   ├── image.php
    │   │   ├── MailMerge.php
    │   │   ├── Menu.php
    │   │   ├── Popup_picker.html
    │   │   ├── Popup_picker.php
    │   │   ├── PopupCampaignRoi.html
    │   │   ├── PopupCampaignRoi.php
    │   │   ├── ProcessBouncedEmails.php
    │   │   ├── ProspectLink.php
    │   │   ├── QueueCampaign.php
    │   │   ├── RemoveMe.php
    │   │   ├── RoiDetailView.php
    │   │   ├── RoiDetailView.tpl
    │   │   ├── Save.php
    │   │   ├── Schedule.html
    │   │   ├── Schedule.php
    │   │   ├── SearchForm_NewsLetter.html
    │   │   ├── SubPanelViewer.php
    │   │   ├── Subscriptions.html
    │   │   ├── Subscriptions.php
    │   │   ├── Subscriptions.tpl
    │   │   ├── TrackDetailView.php
    │   │   ├── TrackDetailView.tpl
    │   │   ├── Tracker.php
    │   │   ├── utils.php
    │   │   ├── vardefs.php
    │   │   ├── WebToLead.js
    │   │   ├── WebToLeadCapture.php
    │   │   ├── WebToLeadCreation.html
    │   │   ├── WebToLeadCreation.php
    │   │   ├── WebToLeadDownloadForm.html
    │   │   ├── WebToLeadForm.html
    │   │   ├── WebToLeadFormBuilder.php
    │   │   ├── WebToLeadFormBuilderOptInCheckbox.tpl
    │   │   ├── WebToLeadFormSave.php
    │   │   ├── WebToPersonCapture.php
    │   │   ├── wizard.js
    │   │   ├── WizardCampaignSave.php
    │   │   ├── WizardEmailSetup.html
    │   │   ├── WizardEmailSetup.php
    │   │   ├── WizardEmailSetupSave.php
    │   │   ├── WizardHome.html
    │   │   ├── WizardHome.php
    │   │   ├── WizardMarketing.html
    │   │   ├── WizardMarketing.php
    │   │   ├── WizardMarketingSave.php
    │   │   ├── WizardNewsletter.html
    │   │   ├── WizardNewsletter.php
    │   │   ├── WizardNewsletterSave.php
    │   │   ├── Dashlets/
    │   │   │   └── TopCampaignsDashlet/
    │   │   │       ├── TopCampaignsDashlet.meta.php
    │   │   │       ├── TopCampaignsDashlet.php
    │   │   │       ├── TopCampaignsDashlet.tpl
    │   │   │       └── TopCampaignsDashletConfigure.tpl
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── additionalDetails.php
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── popupdefs.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   ├── studio.php
    │   │   │   ├── subpaneldefs.php
    │   │   │   └── subpanels/
    │   │   │       ├── default.php
    │   │   │       └── ForEmailMarketing.php
    │   │   ├── tpls/
    │   │   │   ├── campaign-inactive.tpl
    │   │   │   ├── progressStepsStyle.html
    │   │   │   ├── WizardCampaignBudget.tpl
    │   │   │   ├── WizardCampaignHeader.tpl
    │   │   │   ├── WizardCampaignTargetList.tpl
    │   │   │   ├── WizardCampaignTargetListForNonNewsLetter.tpl
    │   │   │   ├── WizardCampaignTracker.tpl
    │   │   │   ├── WizardHomeStart.tpl
    │   │   │   └── WizardNewsletter.tpl
    │   │   └── views/
    │   │       ├── view.classic.php
    │   │       ├── view.detail.php
    │   │       ├── view.modulelistmenu.php
    │   │       └── view.newsletterlist.php
    │   ├── CampaignTrackers/
    │   │   ├── CampaignTracker.php
    │   │   ├── DetailView.html
    │   │   ├── DetailView.php
    │   │   ├── EditView.html
    │   │   ├── EditView.php
    │   │   ├── Forms.html
    │   │   ├── Forms.php
    │   │   ├── Menu.php
    │   │   ├── Save.php
    │   │   ├── vardefs.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   └── metadata/
    │   │       └── subpanels/
    │   │           └── default.php
    │   ├── Cases/
    │   │   ├── Case.php
    │   │   ├── CasesJjwg_MapsLogicHook.php
    │   │   ├── CasesListViewSmarty.php
    │   │   ├── CasesQuickCreate.php
    │   │   ├── controller.php
    │   │   ├── field_arrays.php
    │   │   ├── Menu.php
    │   │   ├── vardefs.php
    │   │   ├── Dashlets/
    │   │   │   └── MyCasesDashlet/
    │   │   │       ├── MyCasesDashlet.data.php
    │   │   │       ├── MyCasesDashlet.meta.php
    │   │   │       └── MyCasesDashlet.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── accountsquickcreatedefs.php
    │   │   │   ├── additionalDetails.php
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── popupdefs.php
    │   │   │   ├── quickcreatedefs.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   ├── studio.php
    │   │   │   ├── subpaneldefs.php
    │   │   │   └── subpanels/
    │   │   │       ├── default.php
    │   │   │       ├── ForAccounts.php
    │   │   │       └── ForEmails.php
    │   │   ├── SugarFeeds/
    │   │   │   └── CaseFeed.php
    │   │   ├── tpls/
    │   │   │   └── QuickCreate.tpl
    │   │   └── views/
    │   │       ├── view.edit.php
    │   │       └── view.list.php
    │   ├── Charts/
    │   │   ├── chartdefs.php
    │   │   ├── DynamicAction.php
    │   │   ├── PredefinedChart.php
    │   │   ├── code/
    │   │   │   ├── Chart_lead_source_by_outcome.php
    │   │   │   ├── Chart_my_pipeline_by_sales_stage.php
    │   │   │   ├── Chart_outcome_by_month.php
    │   │   │   ├── Chart_pipeline_by_lead_source.php
    │   │   │   ├── Chart_pipeline_by_sales_stage.php
    │   │   │   └── predefined_charts.php
    │   │   ├── Dashlets/
    │   │   │   ├── PredefinedChartDashletScript.tpl
    │   │   │   ├── CampaignROIChartDashlet/
    │   │   │   │   ├── CampaignROIChartConfigure.tpl
    │   │   │   │   ├── CampaignROIChartDashlet.data.php
    │   │   │   │   ├── CampaignROIChartDashlet.en_us.lang.php
    │   │   │   │   ├── CampaignROIChartDashlet.meta.php
    │   │   │   │   └── CampaignROIChartDashlet.php
    │   │   │   ├── MyPipelineBySalesStageDashlet/
    │   │   │   │   ├── MyPipelineBySalesStageConfigure.tpl
    │   │   │   │   ├── MyPipelineBySalesStageDashlet.data.php
    │   │   │   │   ├── MyPipelineBySalesStageDashlet.en_us.lang.php
    │   │   │   │   ├── MyPipelineBySalesStageDashlet.meta.php
    │   │   │   │   └── MyPipelineBySalesStageDashlet.php
    │   │   │   ├── OpportunitiesByLeadSourceByOutcomeDashlet/
    │   │   │   │   ├── OpportunitiesByLeadSourceByOutcomeConfigure.tpl
    │   │   │   │   ├── OpportunitiesByLeadSourceByOutcomeDashlet.data.php
    │   │   │   │   ├── OpportunitiesByLeadSourceByOutcomeDashlet.en_us.lang.php
    │   │   │   │   ├── OpportunitiesByLeadSourceByOutcomeDashlet.meta.php
    │   │   │   │   └── OpportunitiesByLeadSourceByOutcomeDashlet.php
    │   │   │   ├── OpportunitiesByLeadSourceDashlet/
    │   │   │   │   ├── OpportunitiesByLeadSourceConfigure.tpl
    │   │   │   │   ├── OpportunitiesByLeadSourceDashlet.data.php
    │   │   │   │   ├── OpportunitiesByLeadSourceDashlet.en_us.lang.php
    │   │   │   │   ├── OpportunitiesByLeadSourceDashlet.meta.php
    │   │   │   │   └── OpportunitiesByLeadSourceDashlet.php
    │   │   │   ├── OutcomeByMonthDashlet/
    │   │   │   │   ├── OutcomeByMonthConfigure.tpl
    │   │   │   │   ├── OutcomeByMonthDashlet.data.php
    │   │   │   │   ├── OutcomeByMonthDashlet.en_us.lang.php
    │   │   │   │   ├── OutcomeByMonthDashlet.meta.php
    │   │   │   │   └── OutcomeByMonthDashlet.php
    │   │   │   └── PipelineBySalesStageDashlet/
    │   │   │       ├── PipelineBySalesStageConfigure.tpl
    │   │   │       ├── PipelineBySalesStageDashlet.data.php
    │   │   │       ├── PipelineBySalesStageDashlet.en_us.lang.php
    │   │   │       ├── PipelineBySalesStageDashlet.meta.php
    │   │   │       └── PipelineBySalesStageDashlet.php
    │   │   └── language/
    │   │       └── en_us.lang.php
    │   ├── Configurator/
    │   │   ├── action_view_map.php
    │   │   ├── Configurator.php
    │   │   ├── controller.php
    │   │   ├── Forms.php
    │   │   ├── LogView.php
    │   │   ├── Menu.php
    │   │   ├── UploadFileCheck.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   └── SugarpdfSettingsdefs.php
    │   │   ├── tpls/
    │   │   │   ├── addFontResult.tpl
    │   │   │   ├── addFontView.tpl
    │   │   │   ├── adminwizard.tpl
    │   │   │   ├── EditView.tpl
    │   │   │   ├── fontmanager.tpl
    │   │   │   ├── historyContactsEmails.tpl
    │   │   │   ├── SugarpdfSettings.tpl
    │   │   │   └── SugarpdfSettingsFields.tpl
    │   │   └── views/
    │   │       ├── view.addfontresult.php
    │   │       ├── view.addfontview.php
    │   │       ├── view.adminwizard.php
    │   │       ├── view.edit.php
    │   │       ├── view.fontmanager.php
    │   │       ├── view.historycontactsemails.php
    │   │       └── view.sugarpdfsettings.php
    │   ├── Connectors/
    │   │   ├── action_view_map.php
    │   │   ├── Connector.js
    │   │   ├── ConnectorRecord.php
    │   │   ├── controller.php
    │   │   ├── Forms.php
    │   │   ├── InstallDefaultConnectors.php
    │   │   ├── Menu.php
    │   │   ├── connectors/
    │   │   │   └── sources/
    │   │   │       └── ext/
    │   │   │           └── rest/
    │   │   │               ├── facebook/
    │   │   │               │   ├── config.php
    │   │   │               │   ├── facebook.php
    │   │   │               │   ├── mapping.php
    │   │   │               │   ├── vardefs.php
    │   │   │               │   └── language/
    │   │   │               │       └── en_us.lang.php
    │   │   │               ├── insideview/
    │   │   │               │   ├── config.php
    │   │   │               │   ├── insideview.php
    │   │   │               │   ├── InsideViewLogicHook.php
    │   │   │               │   ├── mapping.php
    │   │   │               │   ├── language/
    │   │   │               │   │   └── en_us.lang.php
    │   │   │               │   └── tpls/
    │   │   │               │       └── InsideView.tpl
    │   │   │               └── twitter/
    │   │   │                   ├── config.php
    │   │   │                   ├── mapping.php
    │   │   │                   ├── twitter.php
    │   │   │                   ├── vardefs.php
    │   │   │                   └── language/
    │   │   │                       └── en_us.lang.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   └── searchdefs.php
    │   │   ├── tpls/
    │   │   │   ├── administration.tpl
    │   │   │   ├── display_properties.tpl
    │   │   │   ├── listview.tpl
    │   │   │   ├── mapping_properties.tpl
    │   │   │   ├── modify_display.tpl
    │   │   │   ├── modify_mapping.tpl
    │   │   │   ├── modify_properties.tpl
    │   │   │   ├── modify_search.tpl
    │   │   │   ├── search_form.tpl
    │   │   │   ├── search_properties.tpl
    │   │   │   ├── source_properties.tpl
    │   │   │   └── tabs.css
    │   │   └── views/
    │   │       ├── view.connectorsettings.php
    │   │       ├── view.displayproperties.php
    │   │       ├── view.mappingproperties.php
    │   │       ├── view.modifydisplay.php
    │   │       ├── view.modifymapping.php
    │   │       ├── view.modifyproperties.php
    │   │       ├── view.modifysearch.php
    │   │       ├── view.searchproperties.php
    │   │       └── view.sourceproperties.php
    │   ├── Contacts/
    │   │   ├── AcceptDecline.php
    │   │   ├── Address_picker.html
    │   │   ├── Contact.js
    │   │   ├── Contact.php
    │   │   ├── ContactFormBase.php
    │   │   ├── ContactOpportunityRelationship.php
    │   │   ├── ContactOpportunityRelationshipEdit.html
    │   │   ├── ContactOpportunityRelationshipEdit.php
    │   │   ├── ContactsJjwg_MapsLogicHook.php
    │   │   ├── ContactsListViewSmarty.php
    │   │   ├── ContactsQuickCreate.php
    │   │   ├── controller.php
    │   │   ├── createPortalUser.php
    │   │   ├── disablePortalUser.php
    │   │   ├── Email_picker.html
    │   │   ├── enablePortalUser.php
    │   │   ├── field_arrays.php
    │   │   ├── MailMergePicker.html
    │   │   ├── Menu.php
    │   │   ├── Popup_picker.php
    │   │   ├── Save.php
    │   │   ├── SaveContactOpportunityRelationship.php
    │   │   ├── ShowDuplicates.html
    │   │   ├── ShowDuplicates.php
    │   │   ├── updatePortal.php
    │   │   ├── vardefs.php
    │   │   ├── Dashlets/
    │   │   │   └── MyContactsDashlet/
    │   │   │       ├── MyContactsDashlet.data.php
    │   │   │       ├── MyContactsDashlet.meta.php
    │   │   │       └── MyContactsDashlet.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── additionalDetails.php
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── metafiles.php
    │   │   │   ├── popupdefs.php
    │   │   │   ├── popupdefsEmail.php
    │   │   │   ├── quickcreatedefs.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   ├── studio.php
    │   │   │   ├── subpaneldefs.php
    │   │   │   └── subpanels/
    │   │   │       ├── default.php
    │   │   │       ├── ForAccounts.php
    │   │   │       ├── ForCalls.php
    │   │   │       ├── ForCases.php
    │   │   │       ├── ForContacts.php
    │   │   │       ├── ForEmails.php
    │   │   │       ├── ForMeetings.php
    │   │   │       ├── ForOpportunities.php
    │   │   │       ├── ForProject.php
    │   │   │       └── FP_events_subpanel_fp_events_contacts.php
    │   │   ├── SugarFeeds/
    │   │   │   └── ContactFeed.php
    │   │   ├── tpls/
    │   │   │   └── QuickCreate.tpl
    │   │   └── views/
    │   │       ├── view.closecontactaddresspopup.php
    │   │       ├── view.contactaddresspopup.php
    │   │       ├── view.detail.php
    │   │       ├── view.edit.php
    │   │       ├── view.list.php
    │   │       ├── view.mailmergepopup.php
    │   │       ├── view.quickcreate.php
    │   │       ├── view.retrieveemail.php
    │   │       └── view.validportalusername.php
    │   ├── Currencies/
    │   │   ├── Currency.php
    │   │   ├── EditCurrency.php
    │   │   ├── EditView.js
    │   │   ├── EditView.tpl
    │   │   ├── field_arrays.php
    │   │   ├── Forms.php
    │   │   ├── index.php
    │   │   ├── iso4217.php
    │   │   ├── ListCurrency.php
    │   │   ├── ListView.html
    │   │   ├── Menu.php
    │   │   ├── vardefs.php
    │   │   └── language/
    │   │       └── en_us.lang.php
    │   ├── Delegates/
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   └── metadata/
    │   │       └── subpaneldefs.php
    │   ├── DocumentRevisions/
    │   │   ├── DocumentRevision.php
    │   │   ├── field_arrays.php
    │   │   ├── Forms.php
    │   │   ├── ListView.html
    │   │   ├── Menu.php
    │   │   ├── vardefs.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   └── subpanels/
    │   │   │       └── default.php
    │   │   └── subpanels/
    │   │       └── default.php
    │   ├── Documents/
    │   │   ├── action_view_map.php
    │   │   ├── controller.php
    │   │   ├── Delete.php
    │   │   ├── Document.php
    │   │   ├── DocumentExternalApiDropDown.php
    │   │   ├── DocumentPopupPicker.php
    │   │   ├── documents.js
    │   │   ├── DocumentSoap.php
    │   │   ├── field_arrays.php
    │   │   ├── GetLatestRevision.php
    │   │   ├── Menu.php
    │   │   ├── TreeData.php
    │   │   ├── vardefs.php
    │   │   ├── Dashlets/
    │   │   │   └── MyDocumentsDashlet/
    │   │   │       ├── MyDocumentsDashlet.data.php
    │   │   │       ├── MyDocumentsDashlet.meta.php
    │   │   │       └── MyDocumentsDashlet.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── metafiles.php
    │   │   │   ├── popupdefs.php
    │   │   │   ├── quickcreatedefs.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   ├── studio.php
    │   │   │   ├── subpaneldefs.php
    │   │   │   └── subpanels/
    │   │   │       ├── default.php
    │   │   │       └── ForContractType.php
    │   │   ├── tpls/
    │   │   │   ├── detailHeader.tpl
    │   │   │   └── view.extdoc.tpl
    │   │   └── views/
    │   │       ├── view.detail.php
    │   │       ├── view.edit.php
    │   │       └── view.extdoc.php
    │   ├── DynamicFields/
    │   │   ├── DynamicField.php
    │   │   ├── FieldCases.php
    │   │   ├── FieldsMetaData.php
    │   │   ├── FieldViewer.php
    │   │   ├── Save.php
    │   │   ├── UpgradeFields.php
    │   │   ├── vardefs.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   └── templates/
    │   │       ├── Fields/
    │   │       │   ├── TemplateAddress.php
    │   │       │   ├── TemplateAddressCountry.php
    │   │       │   ├── TemplateBoolean.php
    │   │       │   ├── TemplateCronSchedule.php
    │   │       │   ├── TemplateCurrency.php
    │   │       │   ├── TemplateCurrencyId.php
    │   │       │   ├── TemplateDate.php
    │   │       │   ├── TemplateDatetimecombo.php
    │   │       │   ├── TemplateDecimal.php
    │   │       │   ├── TemplateDynamicenum.php
    │   │       │   ├── TemplateEmail.php
    │   │       │   ├── TemplateEncrypt.php
    │   │       │   ├── TemplateEnum.php
    │   │       │   ├── TemplateField.php
    │   │       │   ├── TemplateFloat.php
    │   │       │   ├── TemplateHTML.php
    │   │       │   ├── TemplateId.php
    │   │       │   ├── TemplateIFrame.php
    │   │       │   ├── TemplateImage.php
    │   │       │   ├── TemplateInt.php
    │   │       │   ├── TemplateMultiEnum.php
    │   │       │   ├── TemplateParent.php
    │   │       │   ├── TemplateParentType.php
    │   │       │   ├── TemplatePhone.php
    │   │       │   ├── TemplateRadioEnum.php
    │   │       │   ├── TemplateRange.php
    │   │       │   ├── TemplateRelatedTextField.php
    │   │       │   ├── TemplateText.php
    │   │       │   ├── TemplateTextArea.php
    │   │       │   ├── TemplateURL.php
    │   │       │   ├── TemplateWysiwyg.php
    │   │       │   └── Forms/
    │   │       │       ├── address.tpl
    │   │       │       ├── bool.tpl
    │   │       │       ├── coreBottom.tpl
    │   │       │       ├── coreTop.tpl
    │   │       │       ├── currency.tpl
    │   │       │       ├── date.php
    │   │       │       ├── date.tpl
    │   │       │       ├── datetimecombo.php
    │   │       │       ├── datetimecombo.tpl
    │   │       │       ├── dynamicenum.php
    │   │       │       ├── dynamicenum.tpl
    │   │       │       ├── encrypt.php
    │   │       │       ├── encrypt.tpl
    │   │       │       ├── enum.tpl
    │   │       │       ├── enum2.php
    │   │       │       ├── float.tpl
    │   │       │       ├── html.php
    │   │       │       ├── html.tpl
    │   │       │       ├── iframe.php
    │   │       │       ├── iframe.tpl
    │   │       │       ├── image.php
    │   │       │       ├── image.tpl
    │   │       │       ├── int.tpl
    │   │       │       ├── multienum.php
    │   │       │       ├── multienum.tpl
    │   │       │       ├── parent.php
    │   │       │       ├── parent.tpl
    │   │       │       ├── phone.php
    │   │       │       ├── phone.tpl
    │   │       │       ├── radioenum.php
    │   │       │       ├── relate.php
    │   │       │       ├── relate.tpl
    │   │       │       ├── text.tpl
    │   │       │       ├── url.php
    │   │       │       ├── url.tpl
    │   │       │       ├── varchar.tpl
    │   │       │       ├── wysiwyg.php
    │   │       │       └── wysiwyg.tpl
    │   │       └── Files/
    │   │           ├── DetailView.php
    │   │           └── EditView.php
    │   ├── EAPM/
    │   │   ├── action_view_map.php
    │   │   ├── CheckLogins.php
    │   │   ├── controller.php
    │   │   ├── EAPM.php
    │   │   ├── EAPMEdit.js
    │   │   ├── vardefs.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── metafiles.php
    │   │   │   ├── popupdefs.php
    │   │   │   ├── quickcreatedefs.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   └── subpanels/
    │   │   │       └── default.php
    │   │   ├── tpls/
    │   │   │   ├── DetailViewFooter.tpl
    │   │   │   ├── EditViewFooter.tpl
    │   │   │   └── EditViewHeader.tpl
    │   │   └── views/
    │   │       ├── view.detail.php
    │   │       └── view.edit.php
    │   ├── EmailAddresses/
    │   │   ├── EmailAddress.php
    │   │   ├── vardefs.php
    │   │   └── language/
    │   │       └── en_us.lang.php
    │   ├── EmailMan/
    │   │   ├── action_view_map.php
    │   │   ├── controller.php
    │   │   ├── EmailImage.php
    │   │   ├── EmailMan.php
    │   │   ├── EmailManDelivery.php
    │   │   ├── field_arrays.php
    │   │   ├── Forms.php
    │   │   ├── Menu.php
    │   │   ├── testOutboundEmail.php
    │   │   ├── vardefs.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   └── subpanels/
    │   │   │       └── default.php
    │   │   ├── subpanels/
    │   │   │   └── default.php
    │   │   ├── tpls/
    │   │   │   ├── campaignconfig.tpl
    │   │   │   └── config.tpl
    │   │   └── views/
    │   │       ├── view.campaignconfig.php
    │   │       ├── view.config.php
    │   │       └── view.list.php
    │   ├── EmailMarketing/
    │   │   ├── Delete.php
    │   │   ├── DetailView.html
    │   │   ├── DetailView.php
    │   │   ├── EditView.html
    │   │   ├── EditView.php
    │   │   ├── EmailMarketing.php
    │   │   ├── field_arrays.php
    │   │   ├── Forms.php
    │   │   ├── List.php
    │   │   ├── Menu.php
    │   │   ├── Save.php
    │   │   ├── SubPanelView.html
    │   │   ├── SubPanelView.php
    │   │   ├── vardefs.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── subpaneldefs.php
    │   │   │   └── subpanels/
    │   │   │       └── default.php
    │   │   └── subpanels/
    │   │       └── default.php
    │   ├── Emails/
    │   │   ├── Check.php
    │   │   ├── Compose.php
    │   │   ├── controller.php
    │   │   ├── Delete.php
    │   │   ├── Email.php
    │   │   ├── EmailException.php
    │   │   ├── EmailFromValidator.php
    │   │   ├── EmailsController.php
    │   │   ├── EmailsControllerActionGetFromFields.php
    │   │   ├── EmailsDataAddress.php
    │   │   ├── EmailsDataAddressCollector.php
    │   │   ├── EmailsSignatureResolver.php
    │   │   ├── EmailUI.css
    │   │   ├── EmailUI.php
    │   │   ├── EmailUIAjax.php
    │   │   ├── EmailValidatorException.php
    │   │   ├── field_arrays.php
    │   │   ├── Folder.php
    │   │   ├── GenerateQuickComposeFrame.php
    │   │   ├── Grab.php
    │   │   ├── Menu.php
    │   │   ├── NonGmailSentFolderHandler.php
    │   │   ├── PessimisticLock.php
    │   │   ├── Popup.php
    │   │   ├── Popup_picker.html
    │   │   ├── Popup_picker.php
    │   │   ├── PopupDocuments.html
    │   │   ├── PopupDocuments.php
    │   │   ├── Save.php
    │   │   ├── Status.html
    │   │   ├── Status.php
    │   │   ├── SugarRoutingAsync.php
    │   │   ├── vardefs.php
    │   │   ├── Dashlets/
    │   │   │   └── MyEmailsDashlet/
    │   │   │       ├── MyEmailsDashlet.data.php
    │   │   │       ├── MyEmailsDashlet.meta.php
    │   │   │       └── MyEmailsDashlet.php
    │   │   ├── include/
    │   │   │   ├── displayAttachmentField.php
    │   │   │   ├── displayEmailAddressOptInField.php
    │   │   │   ├── displayHasAttachmentField.php
    │   │   │   ├── displayIndicatorField.php
    │   │   │   ├── displaySubjectField.php
    │   │   │   ├── ComposeView/
    │   │   │   │   ├── ComposeView.php
    │   │   │   │   ├── ComposeView.tpl
    │   │   │   │   ├── ComposeViewBlank.tpl
    │   │   │   │   ├── ComposeViewToolbar.tpl
    │   │   │   │   └── EmailsComposeView.js
    │   │   │   ├── DetailView/
    │   │   │   │   ├── edit-draft.js
    │   │   │   │   ├── EmailsDetailView.php
    │   │   │   │   ├── EmailsDraftDetailView.php
    │   │   │   │   ├── EmailsNonImportedDetailView.php
    │   │   │   │   ├── import.js
    │   │   │   │   ├── ImportView.js
    │   │   │   │   └── quickCreateModal.js
    │   │   │   ├── ImportView/
    │   │   │   │   └── ImportView.tpl
    │   │   │   └── ListView/
    │   │   │       ├── CheckNewEmails.js
    │   │   │       ├── ComposeViewModal.js
    │   │   │       ├── DeleteEmailAction.js
    │   │   │       ├── FoldersViewModal.js
    │   │   │       ├── ImportEmailAction.js
    │   │   │       ├── ListViewDataEmails.php
    │   │   │       ├── ListViewDataEmailsSearchAbstract.php
    │   │   │       ├── ListViewDataEmailsSearchOnCrm.php
    │   │   │       ├── ListViewDataEmailsSearchOnIMap.php
    │   │   │       ├── ListViewHeader.js
    │   │   │       ├── ListViewHeader.tpl
    │   │   │       ├── ListViewSmartyEmails.php
    │   │   │       ├── MarkEmails.js
    │   │   │       └── SettingsView.js
    │   │   ├── javascript/
    │   │   │   ├── ajax.js
    │   │   │   ├── complexLayout.js
    │   │   │   ├── composeEmailTemplate.js
    │   │   │   ├── displayOneEmailTemplate.js
    │   │   │   ├── Email.js
    │   │   │   ├── email_popup_helper.js
    │   │   │   ├── EmailUI.js
    │   │   │   ├── EmailUICompose.js
    │   │   │   ├── EmailUIShared.js
    │   │   │   ├── grid.js
    │   │   │   ├── init.js
    │   │   │   ├── vars.js
    │   │   │   └── viewPrintable.js
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── additionalDetails.php
    │   │   │   ├── composeviewdefs.php
    │   │   │   ├── dashletviewdefs.php
    │   │   │   ├── detaildraftviewdefs.php
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── importviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── metafiles.php
    │   │   │   ├── nonimporteddetailviewdefs.php
    │   │   │   ├── popupdefs.php
    │   │   │   ├── qcmodulesdefs.php
    │   │   │   ├── quickcreatedefs.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   ├── studio.php
    │   │   │   ├── subpaneldefs.php
    │   │   │   └── subpanels/
    │   │   │       ├── ForContacts.php
    │   │   │       ├── ForHistory.php
    │   │   │       ├── ForQueues.php
    │   │   │       ├── ForUnlinkedEmailHistory.php
    │   │   │       └── ForUsers.php
    │   │   ├── subpanels/
    │   │   │   ├── ForContacts.php
    │   │   │   ├── ForHistory.php
    │   │   │   ├── ForQueues.php
    │   │   │   └── ForUsers.php
    │   │   ├── templates/
    │   │   │   ├── _baseConfigData.tpl
    │   │   │   ├── _baseEmail.tpl
    │   │   │   ├── _baseEmailAccountSettings.tpl
    │   │   │   ├── _baseJsVars.tpl
    │   │   │   ├── _createGroupFolder.tpl
    │   │   │   ├── addressBook.tpl
    │   │   │   ├── addressSearch.tpl
    │   │   │   ├── addressSearchContent.tpl
    │   │   │   ├── advancedSearch.tpl
    │   │   │   ├── assignTo.tpl
    │   │   │   ├── dceMenuQuickCreate.tpl
    │   │   │   ├── displayAttachmentField.tpl
    │   │   │   ├── displayHasAttachmentField.tpl
    │   │   │   ├── displayIndicatorField.tpl
    │   │   │   ├── displaySubjectField.tpl
    │   │   │   ├── editAccountDialogue.tpl
    │   │   │   ├── editContact.tpl
    │   │   │   ├── editMailingList.tpl
    │   │   │   ├── emailDetailView.tpl
    │   │   │   ├── emailOptions.tpl
    │   │   │   ├── emailSettings.tpl
    │   │   │   ├── emailSettingsAccountDetails.tpl
    │   │   │   ├── emailSettingsAccounts.tpl
    │   │   │   ├── emailSettingsFolders.tpl
    │   │   │   ├── emailSettingsGeneral.tpl
    │   │   │   ├── emailSettingsRules.tpl
    │   │   │   ├── importRelate.tpl
    │   │   │   ├── outboundDialog.tpl
    │   │   │   ├── outboundDialogTest.tpl
    │   │   │   ├── overlay.tpl
    │   │   │   └── successMessage.tpl
    │   │   └── views/
    │   │       ├── view.compose.php
    │   │       ├── view.deletedraftemail.php
    │   │       ├── view.detail.php
    │   │       ├── view.detaildraft.php
    │   │       ├── view.detailnonimported.php
    │   │       ├── view.edit.php
    │   │       ├── view.import.php
    │   │       ├── view.list.php
    │   │       ├── view.popup.php
    │   │       ├── view.savedraftemail.php
    │   │       └── view.sendemail.php
    │   ├── EmailTemplates/
    │   │   ├── AttachFiles.php
    │   │   ├── CheckDeletable.php
    │   │   ├── Delete.php
    │   │   ├── DetailView.html
    │   │   ├── DetailView.php
    │   │   ├── EditView.html
    │   │   ├── EditView.php
    │   │   ├── EditViewMain.html
    │   │   ├── EmailTemplate.css
    │   │   ├── EmailTemplate.js
    │   │   ├── EmailTemplate.php
    │   │   ├── EmailTemplateData.php
    │   │   ├── EmailTemplateFormBase.php
    │   │   ├── EmailTemplateParser.php
    │   │   ├── field_arrays.php
    │   │   ├── Menu.php
    │   │   ├── PopupDocumentsCampaignTemplate.html
    │   │   ├── PopupDocumentsCampaignTemplate.php
    │   │   ├── Save.php
    │   │   ├── templateFields.php
    │   │   ├── vardefs.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   ├── studio.php
    │   │   │   └── subpaneldefs.php
    │   │   └── views/
    │   │       └── view.classic.php
    │   ├── EmailText/
    │   │   ├── EmailText.php
    │   │   └── vardefs.php
    │   ├── Employees/
    │   │   ├── controller.php
    │   │   ├── Employee.php
    │   │   ├── EmployeesSearchForm.php
    │   │   ├── EmployeesStudioModule.php
    │   │   ├── EmployeeStatus.php
    │   │   ├── Error.php
    │   │   ├── field_arrays.php
    │   │   ├── Forms.php
    │   │   ├── Menu.php
    │   │   ├── Popup_picker.html
    │   │   ├── Popup_picker.php
    │   │   ├── Save.php
    │   │   ├── vardefs.php
    │   │   ├── WapAuthenticate.php
    │   │   ├── WapMenu.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── quickcreatedefs.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   └── studio.php
    │   │   └── views/
    │   │       ├── view.detail.php
    │   │       ├── view.edit.php
    │   │       └── view.list.php
    │   ├── ExternalOAuthConnection/
    │   │   ├── controller.php
    │   │   ├── ExternalOAuthConnection.php
    │   │   ├── Menu.php
    │   │   ├── vardefs.php
    │   │   ├── entrypoint/
    │   │   │   ├── redirectToExternalOAuth.php
    │   │   │   └── setExternalOAuthToken.php
    │   │   ├── js/
    │   │   │   ├── authenticate.js
    │   │   │   └── fields.js
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── metafiles.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   └── subpaneldefs.php
    │   │   ├── provider/
    │   │   │   ├── ExternalOAuthProviderConnector.php
    │   │   │   ├── ExternalOAuthProviderConnectorInterface.php
    │   │   │   ├── Generic/
    │   │   │   │   └── GenericOAuthProviderConnector.php
    │   │   │   └── Microsoft/
    │   │   │       └── MicrosoftOAuthProviderConnector.php
    │   │   ├── services/
    │   │   │   └── OAuthAuthorizationService.php
    │   │   ├── tpl/
    │   │   │   └── setToken.tpl
    │   │   └── views/
    │   │       └── view.list.php
    │   ├── ExternalOAuthProvider/
    │   │   ├── controller.php
    │   │   ├── ExternalOAuthProvider.php
    │   │   ├── Menu.php
    │   │   ├── utils.php
    │   │   ├── vardefs.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── metafiles.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   └── subpaneldefs.php
    │   │   └── views/
    │   │       └── view.list.php
    │   ├── Favorites/
    │   │   ├── controller.php
    │   │   ├── favorites.js
    │   │   ├── Favorites.php
    │   │   ├── vardefs.php
    │   │   ├── Dashlets/
    │   │   │   └── Favorites/
    │   │   │       ├── Favorites.meta.php
    │   │   │       └── FavoritesDashlet.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   └── metadata/
    │   │       ├── dashletviewdefs.php
    │   │       ├── detailviewdefs.php
    │   │       ├── editviewdefs.php
    │   │       ├── listviewdefs.php
    │   │       ├── metafiles.php
    │   │       ├── popupdefs.php
    │   │       ├── quickcreatedefs.php
    │   │       ├── searchdefs.php
    │   │       ├── SearchFields.php
    │   │       └── subpanels/
    │   │           └── default.php
    │   ├── FP_Event_Locations/
    │   │   ├── FP_Event_Locations.php
    │   │   ├── FP_Event_Locations_sugar.php
    │   │   ├── Menu.php
    │   │   ├── vardefs.php
    │   │   ├── Dashlets/
    │   │   │   └── FP_Event_LocationsDashlet/
    │   │   │       ├── FP_Event_LocationsDashlet.meta.php
    │   │   │       └── FP_Event_LocationsDashlet.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   └── metadata/
    │   │       ├── dashletviewdefs.php
    │   │       ├── detailviewdefs.php
    │   │       ├── editviewdefs.php
    │   │       ├── listviewdefs.php
    │   │       ├── metafiles.php
    │   │       ├── popupdefs.php
    │   │       ├── quickcreatedefs.php
    │   │       ├── searchdefs.php
    │   │       ├── SearchFields.php
    │   │       ├── studio.php
    │   │       ├── subpaneldefs.php
    │   │       └── subpanels/
    │   │           └── default.php
    │   ├── FP_events/
    │   │   ├── controller.php
    │   │   ├── duration_dependency.js
    │   │   ├── FP_events.php
    │   │   ├── FP_events_sugar.php
    │   │   ├── jsclass_scheduler.js
    │   │   ├── Menu.php
    │   │   ├── responseEntryPoint.php
    │   │   ├── vardefs.php
    │   │   ├── Dashlets/
    │   │   │   └── FP_eventsDashlet/
    │   │   │       ├── FP_eventsDashlet.meta.php
    │   │   │       └── FP_eventsDashlet.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── additionalDetails.php
    │   │   │   ├── dashletviewdefs.php
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── metafiles.php
    │   │   │   ├── popupdefs.php
    │   │   │   ├── quickcreatedefs.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   ├── studio.php
    │   │   │   ├── subpaneldefs.php
    │   │   │   └── subpanels/
    │   │   │       └── default.php
    │   │   ├── tpls/
    │   │   │   ├── additionalDetails.body.tpl
    │   │   │   └── additionalDetails.caption.tpl
    │   │   └── views/
    │   │       ├── view.detail.php
    │   │       └── view.edit.php
    │   ├── Groups/
    │   │   ├── Delete.php
    │   │   ├── DetailView.html
    │   │   ├── DetailView.php
    │   │   ├── EditView.html
    │   │   ├── EditView.php
    │   │   ├── Forms.php
    │   │   ├── Group.php
    │   │   ├── index.php
    │   │   ├── ListView.html
    │   │   ├── ListView.php
    │   │   ├── Menu.php
    │   │   ├── Save.php
    │   │   ├── vardefs.php
    │   │   └── language/
    │   │       └── en_us.lang.php
    │   ├── Help/
    │   │   ├── index.php
    │   │   ├── Menu.php
    │   │   └── language/
    │   │       └── en_us.lang.php
    │   ├── History/
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   └── metadata/
    │   │       └── subpaneldefs.php
    │   ├── Home/
    │   │   ├── About.php
    │   │   ├── action_view_map.php
    │   │   ├── AddDashboardPages.php
    │   │   ├── AddToFavorites.php
    │   │   ├── controller.php
    │   │   ├── dashlets.php
    │   │   ├── DynamicAction.php
    │   │   ├── Home.html
    │   │   ├── Home.tpl
    │   │   ├── index.php
    │   │   ├── LastViewed.php
    │   │   ├── Menu.php
    │   │   ├── PopupSugar.php
    │   │   ├── QuickSearch.php
    │   │   ├── quicksearchQuery.php
    │   │   ├── RemoveDashboardPages.php
    │   │   ├── RenameDashboardPages.php
    │   │   ├── SaveSubpanelLayout.php
    │   │   ├── Search.php
    │   │   ├── sitemap.php
    │   │   ├── sitemap.tpl
    │   │   ├── SubpanelCreates.php
    │   │   ├── SubpanelEdits.php
    │   │   ├── tour.css
    │   │   ├── tour.js
    │   │   ├── tour.tpl
    │   │   ├── UnifiedSearch.php
    │   │   ├── UnifiedSearchAdvanced.php
    │   │   ├── UnifiedSearchAdvanced.tpl
    │   │   ├── UnifiedSearchAdvancedForm.tpl
    │   │   ├── UnifiedSearchAdvancedResults.tpl
    │   │   ├── Dashlets/
    │   │   │   ├── ChartsDashlet/
    │   │   │   │   ├── ChartsDashlet.en_us.lang.php
    │   │   │   │   ├── ChartsDashlet.meta.php
    │   │   │   │   ├── ChartsDashlet.php
    │   │   │   │   └── ChartsDashletScript.tpl
    │   │   │   ├── iFrameDashlet/
    │   │   │   │   ├── configure.tpl
    │   │   │   │   ├── iFrameDashlet.meta.php
    │   │   │   │   └── iFrameDashlet.php
    │   │   │   ├── InvadersDashlet/
    │   │   │   │   ├── InvadersDashlet.en_us.lang.php
    │   │   │   │   ├── InvadersDashlet.meta.php
    │   │   │   │   ├── InvadersDashlet.php
    │   │   │   │   ├── InvadersDashlet.tpl
    │   │   │   │   ├── InvadersDashletScript.tpl
    │   │   │   │   └── InvadersOptions.tpl
    │   │   │   ├── JotPadDashlet/
    │   │   │   │   ├── JotPadDashlet.en_us.lang.php
    │   │   │   │   ├── JotPadDashlet.meta.php
    │   │   │   │   ├── JotPadDashlet.php
    │   │   │   │   ├── JotPadDashlet.tpl
    │   │   │   │   ├── JotPadDashletOptions.tpl
    │   │   │   │   └── JotPadDashletScript.tpl
    │   │   │   ├── RSSDashlet/
    │   │   │   │   ├── RSSDashlet.en_us.lang.php
    │   │   │   │   ├── RSSDashlet.meta.php
    │   │   │   │   ├── RSSDashlet.php
    │   │   │   │   ├── RSSDashlet.tpl
    │   │   │   │   └── RSSDashletOptions.tpl
    │   │   │   └── SugarNewsDashlet/
    │   │   │       ├── configure.tpl
    │   │   │       ├── SugarNewsDashlet.meta.php
    │   │   │       └── SugarNewsDashlet.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   └── views/
    │   │       ├── view.additionaldetailsretrieve.php
    │   │       ├── view.list.php
    │   │       ├── view.modulelistmenu.php
    │   │       └── view.tour.php
    │   ├── iCals/
    │   │   ├── HTTP_WebDAV_Server_iCal.php
    │   │   ├── iCal.php
    │   │   └── Server.php
    │   ├── Import/
    │   │   ├── controller.php
    │   │   ├── CsvAutoDetect.php
    │   │   ├── Forms.php
    │   │   ├── ImportCacheFiles.php
    │   │   ├── ImportDuplicateCheck.php
    │   │   ├── Importer.php
    │   │   ├── ImportFieldSanitize.php
    │   │   ├── ImportFileSplitter.php
    │   │   ├── Menu.php
    │   │   ├── UsersLastImport.php
    │   │   ├── vardefs.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── maps/
    │   │   │   ├── ImportMap.php
    │   │   │   ├── ImportMapAct.php
    │   │   │   ├── ImportMapCsv.php
    │   │   │   ├── ImportMapGoogle.php
    │   │   │   ├── ImportMapOther.php
    │   │   │   ├── ImportMapOutlook.php
    │   │   │   ├── ImportMapSalesforce.php
    │   │   │   └── ImportMapTab.php
    │   │   ├── sources/
    │   │   │   ├── ExternalSourceEAPMAdapter.php
    │   │   │   ├── ImportDataSource.php
    │   │   │   └── ImportFile.php
    │   │   ├── tpls/
    │   │   │   ├── confirm.tpl
    │   │   │   ├── confirm_table.tpl
    │   │   │   ├── dupcheck.tpl
    │   │   │   ├── error.tpl
    │   │   │   ├── last.tpl
    │   │   │   ├── listview.tpl
    │   │   │   ├── listviewpaginator.tpl
    │   │   │   ├── step1.tpl
    │   │   │   ├── step2.tpl
    │   │   │   ├── step3.tpl
    │   │   │   ├── undo.tpl
    │   │   │   └── wizardWrapper.tpl
    │   │   └── views/
    │   │       ├── ImportListView.php
    │   │       ├── ImportView.php
    │   │       ├── view.confirm.php
    │   │       ├── view.dupcheck.php
    │   │       ├── view.error.php
    │   │       ├── view.extdupcheck.php
    │   │       ├── view.last.php
    │   │       ├── view.step1.php
    │   │       ├── view.step2.php
    │   │       ├── view.step3.php
    │   │       ├── view.step4.php
    │   │       └── view.undo.php
    │   ├── InboundEmail/
    │   │   ├── AOPInboundEmail.php
    │   │   ├── controller.php
    │   │   ├── Delete.php
    │   │   ├── EditGroupFolder.php
    │   │   ├── field_arrays.php
    │   │   ├── InboundEmail.js
    │   │   ├── InboundEmail.php
    │   │   ├── Menu.php
    │   │   ├── Overview.php
    │   │   ├── Popup.php
    │   │   ├── PostSave.php
    │   │   ├── Save.php
    │   │   ├── SaveGroupFolder.php
    │   │   ├── ShowInboundFoldersList.php
    │   │   ├── temp.php
    │   │   ├── utils.php
    │   │   ├── vardefs.php
    │   │   ├── View.html
    │   │   ├── js/
    │   │   │   ├── auth_type_fields_toggle.js
    │   │   │   ├── case_create_toggle.js
    │   │   │   ├── distribution_toggle.js
    │   │   │   ├── fields.js
    │   │   │   ├── fields_toggle.js
    │   │   │   ├── mail_folders.js
    │   │   │   ├── owner_toggle.js
    │   │   │   ├── panel_toggle.js
    │   │   │   ├── ssl_port_set.js
    │   │   │   └── test_configuration.js
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── metafiles.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   └── subpaneldefs.php
    │   │   ├── tpls/
    │   │   │   ├── checkImap.tpl
    │   │   │   └── systemSettingsForm.tpl
    │   │   └── views/
    │   │       ├── view.detail.php
    │   │       ├── view.edit.php
    │   │       └── view.list.php
    │   ├── jjwg_Address_Cache/
    │   │   ├── jjwg_Address_Cache.php
    │   │   ├── jjwg_Address_Cache_sugar.php
    │   │   ├── Menu.php
    │   │   ├── vardefs.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   └── metadata/
    │   │       ├── dashletviewdefs.php
    │   │       ├── detailviewdefs.php
    │   │       ├── editviewdefs.php
    │   │       ├── listviewdefs.php
    │   │       ├── metafiles.php
    │   │       ├── popupdefs.php
    │   │       ├── quickcreatedefs.php
    │   │       ├── searchdefs.php
    │   │       ├── SearchFields.php
    │   │       ├── studio.php
    │   │       └── subpanels/
    │   │           └── default.php
    │   ├── jjwg_Areas/
    │   │   ├── controller.php
    │   │   ├── jjwg_Areas.php
    │   │   ├── jjwg_Areas_sugar.php
    │   │   ├── Menu.php
    │   │   ├── vardefs.php
    │   │   ├── Dashlets/
    │   │   │   └── jjwg_AreasDashlet/
    │   │   │       ├── jjwg_AreasDashlet.meta.php
    │   │   │       └── jjwg_AreasDashlet.php
    │   │   ├── javascript/
    │   │   │   └── polygon.js
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── dashletviewdefs.php
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── metafiles.php
    │   │   │   ├── popupdefs.php
    │   │   │   ├── quickcreatedefs.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   ├── studio.php
    │   │   │   ├── subpaneldefs.php
    │   │   │   └── subpanels/
    │   │   │       └── default.php
    │   │   ├── tpls/
    │   │   │   ├── AreasInfoWindow.tpl
    │   │   │   ├── DetailViewFooter.tpl
    │   │   │   └── EditViewFooter.tpl
    │   │   └── views/
    │   │       ├── view.area_detail_map.config.php
    │   │       ├── view.area_detail_map.php
    │   │       ├── view.area_edit_map.config.php
    │   │       └── view.area_edit_map.php
    │   ├── jjwg_Maps/
    │   │   ├── controller.php
    │   │   ├── entry_point_registry.php
    │   │   ├── jjwg_Maps.php
    │   │   ├── jjwg_Maps_Router.php
    │   │   ├── jjwg_Maps_sugar.php
    │   │   ├── Menu.php
    │   │   ├── vardefs.php
    │   │   ├── Dashlets/
    │   │   │   └── jjwg_MapsDashlet/
    │   │   │       ├── jjwg_MapsDashlet.meta.php
    │   │   │       └── jjwg_MapsDashlet.php
    │   │   ├── DataTables/
    │   │   │   └── media/
    │   │   │       ├── css/
    │   │   │       │   ├── demo_page.css
    │   │   │       │   ├── demo_table.css
    │   │   │       │   ├── demo_table_jui.css
    │   │   │       │   ├── jquery.dataTables.css
    │   │   │       │   └── jquery.dataTables_themeroller.css
    │   │   │       ├── js/
    │   │   │       │   └── jquery.dataTables.js
    │   │   │       └── language/
    │   │   │           └── en_us.lang.js
    │   │   ├── javascript/
    │   │   │   ├── jquery.iframe-auto-height.plugin.1.9.3.js
    │   │   │   ├── markerclusterer.js
    │   │   │   ├── markerclusterer_packed.js
    │   │   │   └── polygon.js
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── dashletviewdefs.php
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── metafiles.php
    │   │   │   ├── popupdefs.php
    │   │   │   ├── quickcreatedefs.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   ├── studio.php
    │   │   │   ├── subpaneldefs.php
    │   │   │   └── subpanels/
    │   │   │       └── default.php
    │   │   ├── tpls/
    │   │   │   ├── AccountsInfoWindow.tpl
    │   │   │   ├── CasesInfoWindow.tpl
    │   │   │   ├── ContactsInfoWindow.tpl
    │   │   │   ├── InfoWindow.tpl
    │   │   │   ├── LeadsInfoWindow.tpl
    │   │   │   ├── MeetingsInfoWindow.tpl
    │   │   │   ├── OpportunitiesInfoWindow.tpl
    │   │   │   ├── ProjectInfoWindow.tpl
    │   │   │   ├── ProspectsInfoWindow.tpl
    │   │   │   └── UsersInfoWindow.tpl
    │   │   └── views/
    │   │       ├── view.config.php
    │   │       ├── view.geocoded_counts.php
    │   │       ├── view.geocoding_test.php
    │   │       ├── view.map_display.php
    │   │       ├── view.map_markers.config.php
    │   │       ├── view.map_markers.php
    │   │       ├── view.quick_radius.php
    │   │       └── view.quick_radius_display.php
    │   ├── jjwg_Markers/
    │   │   ├── controller.php
    │   │   ├── jjwg_Markers.php
    │   │   ├── jjwg_Markers_sugar.php
    │   │   ├── Menu.php
    │   │   ├── vardefs.php
    │   │   ├── Dashlets/
    │   │   │   └── jjwg_MarkersDashlet/
    │   │   │       ├── jjwg_MarkersDashlet.meta.php
    │   │   │       └── jjwg_MarkersDashlet.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── dashletviewdefs.php
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── metafiles.php
    │   │   │   ├── popupdefs.php
    │   │   │   ├── quickcreatedefs.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   ├── studio.php
    │   │   │   ├── subpaneldefs.php
    │   │   │   └── subpanels/
    │   │   │       └── default.php
    │   │   ├── tpls/
    │   │   │   ├── DetailViewFooter.tpl
    │   │   │   ├── EditViewFooter.tpl
    │   │   │   └── MarkersInfoWindow.tpl
    │   │   └── views/
    │   │       ├── view.marker_detail_map.config.php
    │   │       ├── view.marker_detail_map.php
    │   │       ├── view.marker_edit_map.config.php
    │   │       └── view.marker_edit_map.php
    │   ├── LabelEditor/
    │   │   ├── EditView.html
    │   │   ├── EditView.php
    │   │   ├── Forms.php
    │   │   ├── LabelList.php
    │   │   ├── Menu.php
    │   │   ├── Save.php
    │   │   └── language/
    │   │       └── en_us.lang.php
    │   ├── Leads/
    │   │   ├── action_view_map.php
    │   │   ├── Capture.php
    │   │   ├── controller.php
    │   │   ├── field_arrays.php
    │   │   ├── Lead.js
    │   │   ├── Lead.php
    │   │   ├── LeadFormBase.php
    │   │   ├── LeadsJjwg_MapsLogicHook.php
    │   │   ├── LeadsListViewSmarty.php
    │   │   ├── LeadsQuickCreate.php
    │   │   ├── LeadsVarDefHandler.php
    │   │   ├── Menu.php
    │   │   ├── MyLeads.html
    │   │   ├── MyLeads.php
    │   │   ├── Popup_picker.html
    │   │   ├── Save.php
    │   │   ├── SubPanelView.html
    │   │   ├── SubPanelView.php
    │   │   ├── vardefs.php
    │   │   ├── Dashlets/
    │   │   │   └── MyLeadsDashlet/
    │   │   │       ├── MyLeadsDashlet.data.php
    │   │   │       ├── MyLeadsDashlet.meta.php
    │   │   │       └── MyLeadsDashlet.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── additionalDetails.php
    │   │   │   ├── convertdefs.php
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── popupdefs.php
    │   │   │   ├── quickcreatedefs.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   ├── studio.php
    │   │   │   ├── subpaneldefs.php
    │   │   │   └── subpanels/
    │   │   │       ├── default.php
    │   │   │       ├── ForCalls.php
    │   │   │       ├── ForEmails.php
    │   │   │       ├── ForMeetings.php
    │   │   │       └── FP_events_subpanel_fp_events_leads_1.php
    │   │   ├── SugarFeeds/
    │   │   │   └── LeadFeed.php
    │   │   ├── tpls/
    │   │   │   ├── ConvertLead.tpl
    │   │   │   ├── ConvertLeadFooter.tpl
    │   │   │   ├── ConvertLeadHeader.tpl
    │   │   │   ├── DetailViewHeader.tpl
    │   │   │   ├── EditConvertLead.tpl
    │   │   │   ├── QuickCreate.tpl
    │   │   │   └── ShowDuplicates.tpl
    │   │   └── views/
    │   │       ├── view.convertlead.php
    │   │       ├── view.detail.php
    │   │       ├── view.edit.php
    │   │       ├── view.list.php
    │   │       └── view.showduplicates.php
    │   ├── MailMerge/
    │   │   ├── controller.php
    │   │   ├── DetailView.php
    │   │   ├── EditView.php
    │   │   ├── get_doc.php
    │   │   ├── index.php
    │   │   ├── MailMerge.php
    │   │   ├── Menu.php
    │   │   ├── Merge.html
    │   │   ├── Merge.php
    │   │   ├── merge_query.php
    │   │   ├── modules_array.php
    │   │   ├── Save.php
    │   │   ├── Step1.html
    │   │   ├── Step1.php
    │   │   ├── Step2.html
    │   │   ├── Step2.php
    │   │   ├── Step3.html
    │   │   ├── Step3.php
    │   │   ├── Step4.html
    │   │   ├── Step4.php
    │   │   ├── Step5.html
    │   │   ├── Step5.php
    │   │   └── language/
    │   │       └── en_us.lang.php
    │   ├── Meetings/
    │   │   ├── action_view_map.php
    │   │   ├── duration_dependency.js
    │   │   ├── field_arrays.php
    │   │   ├── JoinExternalMeeting.php
    │   │   ├── jsclass_scheduler.js
    │   │   ├── Meeting.php
    │   │   ├── MeetingFormBase.php
    │   │   ├── MeetingsJjwg_MapsLogicHook.php
    │   │   ├── MeetingsListViewSmarty.php
    │   │   ├── MeetingsQuickCreate.php
    │   │   ├── Menu.php
    │   │   ├── Save.php
    │   │   ├── SubPanelViewInvitees.html
    │   │   ├── SubPanelViewInvitees.php
    │   │   ├── vardefs.php
    │   │   ├── Dashlets/
    │   │   │   └── MyMeetingsDashlet/
    │   │   │       ├── MyMeetingsDashlet.data.php
    │   │   │       ├── MyMeetingsDashlet.meta.php
    │   │   │       └── MyMeetingsDashlet.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── additionalDetails.php
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── quickcreatedefs.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   ├── studio.php
    │   │   │   ├── subpaneldefs.php
    │   │   │   └── subpanels/
    │   │   │       ├── default.php
    │   │   │       ├── ForActivities.php
    │   │   │       └── ForHistory.php
    │   │   ├── tpls/
    │   │   │   ├── additionalDetails.body.tpl
    │   │   │   ├── additionalDetails.caption.tpl
    │   │   │   ├── detailHeader.tpl
    │   │   │   ├── extMeetingNoStart.tpl
    │   │   │   ├── extMeetingNotInvited.tpl
    │   │   │   ├── footer.tpl
    │   │   │   ├── header.tpl
    │   │   │   ├── QuickCreate.tpl
    │   │   │   └── reminders.tpl
    │   │   └── views/
    │   │       ├── view.edit.php
    │   │       ├── view.list.php
    │   │       └── view.listbytype.php
    │   ├── MergeRecords/
    │   │   ├── controller.php
    │   │   ├── index.php
    │   │   ├── Menu.php
    │   │   ├── Merge.js
    │   │   ├── MergeField.html
    │   │   ├── MergeRecord.php
    │   │   ├── SaveMerge.php
    │   │   ├── SearchForm.html
    │   │   ├── Step1.html
    │   │   ├── Step1.php
    │   │   ├── Step2.html
    │   │   ├── Step2.php
    │   │   ├── Step3.html
    │   │   ├── Step3.php
    │   │   ├── vardefs.php
    │   │   └── language/
    │   │       └── en_us.lang.php
    │   ├── ModuleBuilder/
    │   │   ├── action_view_map.php
    │   │   ├── controller.php
    │   │   ├── Forms.php
    │   │   ├── javascript/
    │   │   │   ├── JSTransaction.js
    │   │   │   ├── ModuleBuilder.js
    │   │   │   ├── SimpleList.js
    │   │   │   ├── studio2.js
    │   │   │   ├── studio2FieldDD.js
    │   │   │   ├── studio2ListDD.js
    │   │   │   ├── studio2PanelDD.js
    │   │   │   ├── studio2RowDD.js
    │   │   │   ├── studiotabgroups.js
    │   │   │   └── wizardTemplate.js
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── MB/
    │   │   │   ├── AjaxCompose.php
    │   │   │   ├── header.php
    │   │   │   ├── MBField.php
    │   │   │   ├── MBLanguage.php
    │   │   │   ├── MBModule.php
    │   │   │   ├── MBPackage.php
    │   │   │   ├── MBPackageTree.php
    │   │   │   ├── MBRelationship.php
    │   │   │   ├── MBVardefs.php
    │   │   │   └── ModuleBuilder.php
    │   │   ├── Module/
    │   │   │   ├── DropDownBrowser.php
    │   │   │   ├── DropDownTree.php
    │   │   │   ├── IconRepository.php
    │   │   │   ├── MainTree.php
    │   │   │   ├── StudioBrowser.php
    │   │   │   ├── StudioModule.php
    │   │   │   ├── StudioModuleFactory.php
    │   │   │   └── StudioTree.php
    │   │   ├── parsers/
    │   │   │   ├── constants.php
    │   │   │   ├── ModuleBuilderParser.php
    │   │   │   ├── parser.dropdown.php
    │   │   │   ├── parser.label.php
    │   │   │   ├── parser.modifylayoutview.php
    │   │   │   ├── parser.modifylistview.php
    │   │   │   ├── parser.modifysubpanel.php
    │   │   │   ├── parser.searchfields.php
    │   │   │   ├── ParserFactory.php
    │   │   │   ├── StandardField.php
    │   │   │   ├── relationships/
    │   │   │   │   ├── AbstractRelationship.php
    │   │   │   │   ├── AbstractRelationships.php
    │   │   │   │   ├── ActivitiesRelationship.php
    │   │   │   │   ├── DeployedRelationships.php
    │   │   │   │   ├── ManyToManyRelationship.php
    │   │   │   │   ├── ManyToOneRelationship.php
    │   │   │   │   ├── OneToManyRelationship.php
    │   │   │   │   ├── OneToOneRelationship.php
    │   │   │   │   ├── RelationshipFactory.php
    │   │   │   │   ├── RelationshipsInterface.php
    │   │   │   │   └── UndeployedRelationships.php
    │   │   │   └── views/
    │   │   │       ├── AbstractMetaDataImplementation.php
    │   │   │       ├── AbstractMetaDataParser.php
    │   │   │       ├── DashletMetaDataParser.php
    │   │   │       ├── DeployedMetaDataImplementation.php
    │   │   │       ├── DeployedSubpanelImplementation.php
    │   │   │       ├── GridLayoutMetaDataParser.php
    │   │   │       ├── History.php
    │   │   │       ├── HistoryInterface.php
    │   │   │       ├── ListLayoutMetaDataParser.php
    │   │   │       ├── MetaDataImplementationInterface.php
    │   │   │       ├── MetaDataParserInterface.php
    │   │   │       ├── PopupMetaDataParser.php
    │   │   │       ├── SearchViewMetaDataParser.php
    │   │   │       ├── SubpanelMetaDataParser.php
    │   │   │       ├── UndeployedMetaDataImplementation.php
    │   │   │       └── UndeployedSubpanelImplementation.php
    │   │   ├── tpls/
    │   │   │   ├── assistantJavascript.tpl
    │   │   │   ├── editProperty.tpl
    │   │   │   ├── exportcustomizations.tpl
    │   │   │   ├── history.tpl
    │   │   │   ├── includes.tpl
    │   │   │   ├── index.tpl
    │   │   │   ├── labels.tpl
    │   │   │   ├── LayoutEditor.css
    │   │   │   ├── layoutView.tpl
    │   │   │   ├── ListEditor.css
    │   │   │   ├── listView.tpl
    │   │   │   ├── main.tpl
    │   │   │   ├── MB.css
    │   │   │   ├── resetModule.tpl
    │   │   │   ├── studioRelationship.tpl
    │   │   │   ├── studioRelationships.tpl
    │   │   │   ├── wizard.tpl
    │   │   │   ├── MBModule/
    │   │   │   │   ├── Class.tpl
    │   │   │   │   ├── DeveloperClass.tpl
    │   │   │   │   ├── dropdown.css
    │   │   │   │   ├── dropdown.tpl
    │   │   │   │   ├── dropdowns.tpl
    │   │   │   │   ├── field.tpl
    │   │   │   │   ├── fields.tpl
    │   │   │   │   ├── form.tpl
    │   │   │   │   ├── language.tpl
    │   │   │   │   ├── main.tpl
    │   │   │   │   ├── Menu.tpl
    │   │   │   │   ├── module.tpl
    │   │   │   │   ├── Studio.tpl
    │   │   │   │   └── vardef.tpl
    │   │   │   ├── MBPackage/
    │   │   │   │   ├── appLanguage.tpl
    │   │   │   │   ├── deploy.tpl
    │   │   │   │   └── package.tpl
    │   │   │   └── Preview/
    │   │   │       ├── layoutView.tpl
    │   │   │       └── listView.tpl
    │   │   └── views/
    │   │       ├── view.dashlet.php
    │   │       ├── view.deletemodule.php
    │   │       ├── view.deletepackage.php
    │   │       ├── view.displaydeploy.php
    │   │       ├── view.displaydeployresult.php
    │   │       ├── view.dropdown.php
    │   │       ├── view.dropdowns.php
    │   │       ├── view.exportcustomizations.php
    │   │       ├── view.history.php
    │   │       ├── view.home.php
    │   │       ├── view.labels.php
    │   │       ├── view.layoutview.php
    │   │       ├── view.listview.php
    │   │       ├── view.main.php
    │   │       ├── view.module.php
    │   │       ├── view.modulefield.php
    │   │       ├── view.modulefields.php
    │   │       ├── view.modulelabels.php
    │   │       ├── view.package.php
    │   │       ├── view.popupview.php
    │   │       ├── view.property.php
    │   │       ├── view.relationship.php
    │   │       ├── view.relationships.php
    │   │       ├── view.resetmodule.php
    │   │       ├── view.searchview.php
    │   │       ├── view.tree.php
    │   │       └── view.wizard.php
    │   ├── MySettings/
    │   │   ├── LoadTabSubpanels.php
    │   │   ├── StoreQuery.php
    │   │   ├── TabController.php
    │   │   └── language/
    │   │       └── en_us.lang.php
    │   ├── Notes/
    │   │   ├── controller.php
    │   │   ├── field_arrays.php
    │   │   ├── Menu.php
    │   │   ├── Note.php
    │   │   ├── NoteSoap.php
    │   │   ├── NotesQuickCreate.php
    │   │   ├── SubPanelView.html
    │   │   ├── SubPanelView.php
    │   │   ├── vardefs.php
    │   │   ├── Dashlets/
    │   │   │   └── MyNotesDashlet/
    │   │   │       ├── MyNotesDashlet.data.php
    │   │   │       ├── MyNotesDashlet.meta.php
    │   │   │       └── MyNotesDashlet.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── additionalDetails.php
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── quickcreatedefs.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   ├── studio.php
    │   │   │   ├── subpaneldefs.php
    │   │   │   └── subpanels/
    │   │   │       ├── default.php
    │   │   │       ├── ForCalls.php
    │   │   │       ├── ForHistory.php
    │   │   │       ├── ForMeetings.php
    │   │   │       └── ForTasks.php
    │   │   └── tpls/
    │   │       └── QuickCreate.tpl
    │   ├── OAuth2Clients/
    │   │   ├── controller.php
    │   │   ├── Menu.php
    │   │   ├── OAuth2Clients.php
    │   │   ├── vardefs.php
    │   │   ├── js/
    │   │   │   ├── ClientCredentialsValidation.js
    │   │   │   └── PasswordCredentialsValidation.js
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── detailcredentialsviewdefs.php
    │   │   │   ├── detailpasswordviewdefs.php
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editcredentialsviewdefs.php
    │   │   │   ├── editpasswordviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── metafiles.php
    │   │   │   ├── popupdefs.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   └── subpaneldefs.php
    │   │   └── views/
    │   │       ├── view.detail.php
    │   │       └── view.edit.php
    │   ├── OAuth2Tokens/
    │   │   ├── controller.php
    │   │   ├── Menu.php
    │   │   ├── OAuth2Tokens.php
    │   │   ├── vardefs.php
    │   │   ├── include/
    │   │   │   └── RevokeBulk.js
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   └── metadata/
    │   │       ├── detailviewdefs.php
    │   │       ├── listviewdefs.php
    │   │       ├── metafiles.php
    │   │       ├── searchdefs.php
    │   │       ├── SearchFields.php
    │   │       └── subpanels/
    │   │           └── default.php
    │   ├── OAuthKeys/
    │   │   ├── controller.php
    │   │   ├── OAuthKey.php
    │   │   ├── vardefs.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   └── metadata/
    │   │       ├── detailviewdefs.php
    │   │       ├── editviewdefs.php
    │   │       ├── listviewdefs.php
    │   │       ├── metafiles.php
    │   │       ├── searchdefs.php
    │   │       ├── SearchFields.php
    │   │       └── subpaneldefs.php
    │   ├── OAuthTokens/
    │   │   ├── action_view_map.php
    │   │   ├── controller.php
    │   │   ├── OAuthToken.php
    │   │   ├── vardefs.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   └── subpanels/
    │   │   │       ├── ForKeys.php
    │   │   │       └── ForUser.php
    │   │   ├── tpl/
    │   │   │   ├── authorize.tpl
    │   │   │   └── authorized.tpl
    │   │   └── views/
    │   │       └── view.authorize.php
    │   ├── Opportunities/
    │   │   ├── field_arrays.php
    │   │   ├── ListViewTop.html
    │   │   ├── ListViewTop.php
    │   │   ├── Menu.php
    │   │   ├── OpportunitiesJjwg_MapsLogicHook.php
    │   │   ├── OpportunitiesListViewSmarty.php
    │   │   ├── OpportunitiesQuickCreate.php
    │   │   ├── Opportunity.php
    │   │   ├── OpportunityFormBase.php
    │   │   ├── Save.php
    │   │   ├── SaveOverload.php
    │   │   ├── SubPanelView.html
    │   │   ├── SubPanelView.php
    │   │   ├── SubPanelViewProjects.html
    │   │   ├── SubPanelViewProjects.php
    │   │   ├── vardefs.php
    │   │   ├── Dashlets/
    │   │   │   ├── MyClosedOpportunitiesDashlet/
    │   │   │   │   ├── MyClosedOpportunitiesDashlet.meta.php
    │   │   │   │   ├── MyClosedOpportunitiesDashlet.php
    │   │   │   │   ├── MyClosedOpportunitiesDashlet.tpl
    │   │   │   │   ├── MyClosedOpportunitiesDashletConfigure.tpl
    │   │   │   │   └── MyClosedOpportunitiesDashletOptions.tpl
    │   │   │   └── MyOpportunitiesDashlet/
    │   │   │       ├── MyOpportunitiesDashlet.data.php
    │   │   │       ├── MyOpportunitiesDashlet.meta.php
    │   │   │       └── MyOpportunitiesDashlet.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── acldefs.php
    │   │   │   ├── additionalDetails.php
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── metafiles.php
    │   │   │   ├── popupdefs.php
    │   │   │   ├── quickcreatedefs.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   ├── studio.php
    │   │   │   ├── subpaneldefs.php
    │   │   │   └── subpanels/
    │   │   │       ├── default.php
    │   │   │       ├── ForAccounts.php
    │   │   │       └── ForEmails.php
    │   │   ├── SugarFeeds/
    │   │   │   └── OppFeed.php
    │   │   ├── tpls/
    │   │   │   └── QuickCreate.tpl
    │   │   └── views/
    │   │       ├── view.detail.php
    │   │       ├── view.edit.php
    │   │       └── view.list.php
    │   ├── OptimisticLock/
    │   │   ├── Forms.php
    │   │   ├── LockResolve.php
    │   │   ├── Menu.php
    │   │   └── language/
    │   │       └── en_us.lang.php
    │   ├── OutboundEmailAccounts/
    │   │   ├── controller.php
    │   │   ├── Menu.php
    │   │   ├── OutboundEmailAccounts.php
    │   │   ├── OutboundEmailAccounts_sugar.php
    │   │   ├── smtpPreselection.tpl
    │   │   ├── vardefs.php
    │   │   ├── Dashlets/
    │   │   │   └── OutboundEmailAccountsDashlet/
    │   │   │       ├── OutboundEmailAccountsDashlet.meta.php
    │   │   │       └── OutboundEmailAccountsDashlet.php
    │   │   ├── js/
    │   │   │   ├── fields.js
    │   │   │   ├── owner_toggle.js
    │   │   │   ├── panel_toggle.js
    │   │   │   ├── smtp_auth_toggle.js
    │   │   │   └── ssl_port_set.js
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── dashletviewdefs.php
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── metafiles.php
    │   │   │   ├── popupdefs.php
    │   │   │   ├── quickcreatedefs.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   ├── studio.php
    │   │   │   ├── subpaneldefs.php
    │   │   │   └── subpanels/
    │   │   │       └── default.php
    │   │   └── views/
    │   │       ├── view.detail.php
    │   │       ├── view.edit.php
    │   │       └── view.list.php
    │   ├── Project/
    │   │   ├── action_view_map.php
    │   │   ├── chart.php
    │   │   ├── controller.php
    │   │   ├── Delete.php
    │   │   ├── delete_project_tasks.php
    │   │   ├── field_arrays.php
    │   │   ├── gantt.php
    │   │   ├── jsclass_scheduler.js
    │   │   ├── Menu.php
    │   │   ├── Project.js
    │   │   ├── Project.php
    │   │   ├── project_table.php
    │   │   ├── ProjectJjwg_MapsLogicHook.php
    │   │   ├── ProjectListViewData.php
    │   │   ├── ProjectListViewSmarty.php
    │   │   ├── ProjectQuickCreate.php
    │   │   ├── Save.php
    │   │   ├── SubPanelView.html
    │   │   ├── SubPanelView.php
    │   │   ├── vardefs.php
    │   │   ├── css/
    │   │   │   ├── style.css
    │   │   │   └── style_chart.css
    │   │   ├── Dashlets/
    │   │   │   └── MyProjectDashlet/
    │   │   │       ├── MyProjectDashlet.data.php
    │   │   │       ├── MyProjectDashlet.meta.php
    │   │   │       └── MyProjectDashlet.php
    │   │   ├── js/
    │   │   │   ├── custom_project.js
    │   │   │   ├── jquery.blockUI.js
    │   │   │   ├── main_lib.js
    │   │   │   ├── main_lib_chart.js
    │   │   │   └── splitter.js
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── additionalDetails.php
    │   │   │   ├── dashletviewdefs.php
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── metafiles.php
    │   │   │   ├── popupdefs.php
    │   │   │   ├── quickcreatedefs.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   ├── studio.php
    │   │   │   ├── subpaneldefs.php
    │   │   │   └── subpanels/
    │   │   │       ├── AM_ProjectTemplates_subpanel_am_projecttemplates_project_1.php
    │   │   │       ├── default.php
    │   │   │       └── ForEmails.php
    │   │   ├── tpls/
    │   │   │   ├── footer.tpl
    │   │   │   ├── header.tpl
    │   │   │   ├── QuickCreate.tpl
    │   │   │   ├── QuickEditFooter.tpl
    │   │   │   └── QuickEditHeader.tpl
    │   │   └── views/
    │   │       ├── view.detail.php
    │   │       ├── view.edit.php
    │   │       ├── view.ganttchart.php
    │   │       ├── view.list.php
    │   │       ├── view.quickedit.php
    │   │       ├── view.resourcelist.php
    │   │       ├── view.templatesdetail.php
    │   │       └── view.templatesedit.php
    │   ├── ProjectTask/
    │   │   ├── Delete.php
    │   │   ├── field_arrays.php
    │   │   ├── Forms.html
    │   │   ├── Menu.php
    │   │   ├── MyProjectTasks.html
    │   │   ├── MyProjectTasks.php
    │   │   ├── Popup_picker.html
    │   │   ├── ProjectTask.js
    │   │   ├── ProjectTask.php
    │   │   ├── ProjectTaskQuickCreate.php
    │   │   ├── Save.php
    │   │   ├── SubPanelView.html
    │   │   ├── SubPanelView.php
    │   │   ├── updateDependencies.php
    │   │   ├── updateProject.php
    │   │   ├── vardefs.php
    │   │   ├── Dashlets/
    │   │   │   └── MyProjectTaskDashlet/
    │   │   │       ├── MyProjectTaskDashlet.data.php
    │   │   │       ├── MyProjectTaskDashlet.meta.php
    │   │   │       └── MyProjectTaskDashlet.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── acldefs.php
    │   │   │   ├── additionalDetails.php
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── popupdefs.php
    │   │   │   ├── quickcreatedefs.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   ├── studio.php
    │   │   │   ├── subpaneldefs.php
    │   │   │   └── subpanels/
    │   │   │       ├── default.php
    │   │   │       └── Project_subpanel_projecttask.php
    │   │   ├── tpls/
    │   │   │   └── QuickCreate.tpl
    │   │   └── views/
    │   │       └── view.list.php
    │   ├── ProspectLists/
    │   │   ├── Delete.php
    │   │   ├── Duplicate.php
    │   │   ├── field_arrays.php
    │   │   ├── Forms.html
    │   │   ├── Forms.php
    │   │   ├── Menu.php
    │   │   ├── Popup_picker.html
    │   │   ├── ProspectList.php
    │   │   ├── ProspectListFormBase.php
    │   │   ├── Save.php
    │   │   ├── SubPanelView.html
    │   │   ├── SubPanelView.php
    │   │   ├── TargetListUpdate.php
    │   │   ├── vardefs.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   └── metadata/
    │   │       ├── detailviewdefs.php
    │   │       ├── editviewdefs.php
    │   │       ├── listviewdefs.php
    │   │       ├── popupdefs.php
    │   │       ├── searchdefs.php
    │   │       ├── SearchFields.php
    │   │       ├── studio.php
    │   │       ├── subpaneldefs.php
    │   │       └── subpanels/
    │   │           └── default.php
    │   ├── Prospects/
    │   │   ├── Delete.php
    │   │   ├── field_arrays.php
    │   │   ├── Import.php
    │   │   ├── Menu.php
    │   │   ├── Popup_picker.html
    │   │   ├── Prospect.php
    │   │   ├── ProspectFormBase.php
    │   │   ├── ProspectsJjwg_MapsLogicHook.php
    │   │   ├── ProspectsListViewSmarty.php
    │   │   ├── Save.php
    │   │   ├── vardefs.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── additionalDetails.php
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── popupdefs.php
    │   │   │   ├── quickcreatedefs.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   ├── studio.php
    │   │   │   ├── subpaneldefs.php
    │   │   │   └── subpanels/
    │   │   │       ├── default.php
    │   │   │       └── FP_events_subpanel_fp_events_prospects_1.php
    │   │   ├── tpls/
    │   │   │   ├── DetailViewHeader.tpl
    │   │   │   └── QuickCreate.tpl
    │   │   └── views/
    │   │       ├── view.detail.php
    │   │       ├── view.edit.php
    │   │       └── view.list.php
    │   ├── Relationships/
    │   │   ├── action_view_map.php
    │   │   ├── editFields.tpl
    │   │   ├── field_arrays.php
    │   │   ├── Relationship.php
    │   │   ├── RelationshipHandler.php
    │   │   ├── vardefs.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   └── views/
    │   │       └── view.editfields.php
    │   ├── Releases/
    │   │   ├── DetailView.php
    │   │   ├── EditView.html
    │   │   ├── EditView.php
    │   │   ├── field_arrays.php
    │   │   ├── index.php
    │   │   ├── ListView.html
    │   │   ├── Menu.php
    │   │   ├── Popup_picker.html
    │   │   ├── Popup_picker.php
    │   │   ├── Release.php
    │   │   ├── Save.php
    │   │   ├── vardefs.php
    │   │   └── language/
    │   │       └── en_us.lang.php
    │   ├── Reminders/
    │   │   ├── controller.php
    │   │   ├── Reminder.php
    │   │   ├── Reminders.js
    │   │   ├── vardefs.php
    │   │   └── tpls/
    │   │       ├── reminders.tpl
    │   │       └── remindersDefaults.tpl
    │   ├── Reminders_Invitees/
    │   │   ├── Reminder_Invitee.php
    │   │   └── vardefs.php
    │   ├── ResourceCalendar/
    │   │   ├── index.php
    │   │   ├── Menu.php
    │   │   └── language/
    │   │       └── en_us.lang.php
    │   ├── Roles/
    │   │   ├── Delete.php
    │   │   ├── DeleteUserRelationship.php
    │   │   ├── DetailView.html
    │   │   ├── DetailView.php
    │   │   ├── EditView.html
    │   │   ├── EditView.php
    │   │   ├── field_arrays.php
    │   │   ├── Forms.php
    │   │   ├── Menu.php
    │   │   ├── Role.php
    │   │   ├── Save.php
    │   │   ├── SaveUserRelationship.php
    │   │   ├── SubPanelViewUsers.html
    │   │   ├── SubPanelViewUsers.php
    │   │   ├── vardefs.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   ├── subpaneldefs.php
    │   │   │   └── subpanels/
    │   │   │       └── default.php
    │   │   └── views/
    │   │       └── view.list.php
    │   ├── SavedSearch/
    │   │   ├── field_arrays.php
    │   │   ├── index.php
    │   │   ├── ListView.php
    │   │   ├── Menu.php
    │   │   ├── SavedSearch.php
    │   │   ├── SavedSearchForm.tpl
    │   │   ├── SavedSearchSelects.tpl
    │   │   ├── SearchForm.html
    │   │   ├── UpgradeSavedSearch.php
    │   │   ├── vardefs.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   └── metadata/
    │   │       └── listviewdefs.php
    │   ├── Schedulers/
    │   │   ├── _AddJobsHere.php
    │   │   ├── EditView.html
    │   │   ├── EditView.php
    │   │   ├── field_arrays.php
    │   │   ├── Menu.php
    │   │   ├── Save.php
    │   │   ├── Scheduler.php
    │   │   ├── Schedulers.js
    │   │   ├── vardefs.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   ├── subpaneldefs.php
    │   │   │   └── subpanels/
    │   │   │       └── default.php
    │   │   └── views/
    │   │       ├── view.detail.php
    │   │       ├── view.edit.php
    │   │       └── view.list.php
    │   ├── SchedulersJobs/
    │   │   ├── field_arrays.php
    │   │   ├── SchedulersJob.php
    │   │   ├── vardefs.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   └── metadata/
    │   │       └── subpanels/
    │   │           └── default.php
    │   ├── SecurityGroups/
    │   │   ├── AssignGroups.php
    │   │   ├── config.html
    │   │   ├── config.php
    │   │   ├── Forms.php
    │   │   ├── info.html
    │   │   ├── info.php
    │   │   ├── MassAssign.php
    │   │   ├── Menu.php
    │   │   ├── SaveConfig.php
    │   │   ├── SaveSecurityGroupUserRelationship.php
    │   │   ├── SecurityGroup.php
    │   │   ├── SecurityGroup_sugar.php
    │   │   ├── SecurityGroupMessage.php
    │   │   ├── SecurityGroupUserRelationship.php
    │   │   ├── SecurityGroupUserRelationshipEdit.html
    │   │   ├── SecurityGroupUserRelationshipEdit.php
    │   │   ├── vardefs.php
    │   │   ├── VersionCheck.php
    │   │   ├── javascript/
    │   │   │   └── popup_relate.js
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   └── metadata/
    │   │       ├── detailviewdefs.php
    │   │       ├── editviewdefs.php
    │   │       ├── listviewdefs.php
    │   │       ├── metafiles.php
    │   │       ├── popupdefs.php
    │   │       ├── searchdefs.php
    │   │       ├── SearchFields.php
    │   │       ├── studio.php
    │   │       ├── subpaneldefs.php
    │   │       └── subpanels/
    │   │           ├── admin.php
    │   │           ├── default.php
    │   │           └── ForUsers.php
    │   ├── Spots/
    │   │   ├── controller.php
    │   │   ├── Menu.php
    │   │   ├── ShowSpots.php
    │   │   ├── Spots.php
    │   │   ├── SpotsListViewSmarty.php
    │   │   ├── vardefs.php
    │   │   ├── Dashlets/
    │   │   │   └── SpotsDashlet/
    │   │   │       ├── SpotsDashlet.en_us.lang.php
    │   │   │       ├── SpotsDashlet.meta.php
    │   │   │       ├── SpotsDashlet.php
    │   │   │       ├── SpotsDashlet.tpl
    │   │   │       └── SpotsDashletOptions.tpl
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── dashletviewdefs.php
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── metafiles.php
    │   │   │   ├── popupdefs.php
    │   │   │   ├── quickcreatedefs.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   ├── studio.php
    │   │   │   └── subpanels/
    │   │   │       └── default.php
    │   │   ├── tpl/
    │   │   │   └── ShowSpots.tpl
    │   │   └── views/
    │   │       ├── view.edit.php
    │   │       └── view.list.php
    │   ├── Studio/
    │   │   ├── config.php
    │   │   ├── Forms.php
    │   │   ├── JSTransaction.js
    │   │   ├── SaveTabs.php
    │   │   ├── studio.js
    │   │   ├── studiodd.js
    │   │   ├── studiotabgroups.js
    │   │   ├── TabGroups.php
    │   │   ├── wizard.php
    │   │   ├── ygDDListStudio.js
    │   │   ├── DropDowns/
    │   │   │   ├── DropDownHelper.php
    │   │   │   ├── EditView.php
    │   │   │   └── EditView.tpl
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── parsers/
    │   │   │   └── StudioParser.php
    │   │   ├── TabGroups/
    │   │   │   ├── EditViewTabs.php
    │   │   │   ├── EditViewTabs.tpl
    │   │   │   └── TabGroupHelper.php
    │   │   └── wizards/
    │   │       ├── EditDropDownWizard.php
    │   │       ├── RenameModules.php
    │   │       ├── RenameModules.tpl
    │   │       └── StudioWizard.php
    │   ├── SugarFeed/
    │   │   ├── action_view_map.php
    │   │   ├── AdminSettings.php
    │   │   ├── feedLogicBase.php
    │   │   ├── Forms.php
    │   │   ├── Menu.php
    │   │   ├── SugarFeed.php
    │   │   ├── SugarFeedFlush.php
    │   │   ├── vardefs.php
    │   │   ├── Dashlets/
    │   │   │   └── SugarFeedDashlet/
    │   │   │       ├── Options.tpl
    │   │   │       ├── SugarFeedDashlet.meta.php
    │   │   │       ├── SugarFeedDashlet.php
    │   │   │       ├── SugarFeedScript.tpl
    │   │   │       └── UserPostForm.tpl
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── dashletviewdefs.php
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── metafiles.php
    │   │   │   ├── popupdefs.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   └── subpanels/
    │   │   │       └── default.php
    │   │   ├── tpls/
    │   │   │   └── AdminSettings.tpl
    │   │   └── views/
    │   │       └── view.adminsettings.php
    │   ├── SurveyQuestionOptions/
    │   │   ├── Menu.php
    │   │   ├── SurveyQuestionOptions.php
    │   │   ├── vardefs.php
    │   │   ├── Dashlets/
    │   │   │   └── SurveyQuestionOptionsDashlet/
    │   │   │       ├── SurveyQuestionOptionsDashlet.meta.php
    │   │   │       └── SurveyQuestionOptionsDashlet.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   └── metadata/
    │   │       ├── dashletviewdefs.php
    │   │       ├── detailviewdefs.php
    │   │       ├── editviewdefs.php
    │   │       ├── listviewdefs.php
    │   │       ├── metafiles.php
    │   │       ├── popupdefs.php
    │   │       ├── quickcreatedefs.php
    │   │       ├── searchdefs.php
    │   │       ├── SearchFields.php
    │   │       ├── studio.php
    │   │       └── subpanels/
    │   │           └── default.php
    │   ├── SurveyQuestionResponses/
    │   │   ├── Menu.php
    │   │   ├── SurveyQuestionResponses.php
    │   │   ├── vardefs.php
    │   │   ├── Dashlets/
    │   │   │   └── SurveyQuestionResponsesDashlet/
    │   │   │       ├── SurveyQuestionResponsesDashlet.meta.php
    │   │   │       └── SurveyQuestionResponsesDashlet.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   └── metadata/
    │   │       ├── dashletviewdefs.php
    │   │       ├── detailviewdefs.php
    │   │       ├── editviewdefs.php
    │   │       ├── listviewdefs.php
    │   │       ├── metafiles.php
    │   │       ├── popupdefs.php
    │   │       ├── quickcreatedefs.php
    │   │       ├── searchdefs.php
    │   │       ├── SearchFields.php
    │   │       ├── studio.php
    │   │       └── subpanels/
    │   │           └── default.php
    │   ├── SurveyQuestions/
    │   │   ├── Menu.php
    │   │   ├── SurveyQuestions.php
    │   │   ├── vardefs.php
    │   │   ├── Dashlets/
    │   │   │   └── SurveyQuestionsDashlet/
    │   │   │       ├── SurveyQuestionsDashlet.meta.php
    │   │   │       └── SurveyQuestionsDashlet.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   └── metadata/
    │   │       ├── dashletviewdefs.php
    │   │       ├── detailviewdefs.php
    │   │       ├── editviewdefs.php
    │   │       ├── listviewdefs.php
    │   │       ├── metafiles.php
    │   │       ├── popupdefs.php
    │   │       ├── quickcreatedefs.php
    │   │       ├── searchdefs.php
    │   │       ├── SearchFields.php
    │   │       ├── studio.php
    │   │       ├── subpaneldefs.php
    │   │       └── subpanels/
    │   │           └── default.php
    │   ├── SurveyResponses/
    │   │   ├── Menu.php
    │   │   ├── SurveyResponses.php
    │   │   ├── vardefs.php
    │   │   ├── Dashlets/
    │   │   │   └── SurveyResponsesDashlet/
    │   │   │       ├── SurveyResponsesDashlet.meta.php
    │   │   │       └── SurveyResponsesDashlet.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── Lines/
    │   │   │   └── Lines.php
    │   │   ├── metadata/
    │   │   │   ├── dashletviewdefs.php
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── metafiles.php
    │   │   │   ├── popupdefs.php
    │   │   │   ├── quickcreatedefs.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   ├── studio.php
    │   │   │   └── subpanels/
    │   │   │       └── default.php
    │   │   └── tpls/
    │   │       └── detailquestionresponses.tpl
    │   ├── Surveys/
    │   │   ├── controller.php
    │   │   ├── Menu.php
    │   │   ├── Surveys.php
    │   │   ├── vardefs.php
    │   │   ├── Dashlets/
    │   │   │   └── SurveysDashlet/
    │   │   │       ├── SurveysDashlet.meta.php
    │   │   │       └── SurveysDashlet.php
    │   │   ├── Entry/
    │   │   │   ├── Survey.php
    │   │   │   ├── SurveySubmit.php
    │   │   │   └── Thanks.php
    │   │   ├── javascript/
    │   │   │   ├── Survey.js
    │   │   │   └── datetimepicker/
    │   │   │       ├── jquery-ui-timepicker-addon.css
    │   │   │       └── jquery-ui-timepicker-addon.js
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── Lines/
    │   │   │   └── Lines.php
    │   │   ├── metadata/
    │   │   │   ├── dashletviewdefs.php
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── metafiles.php
    │   │   │   ├── popupdefs.php
    │   │   │   ├── quickcreatedefs.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   ├── studio.php
    │   │   │   ├── subpaneldefs.php
    │   │   │   └── subpanels/
    │   │   │       └── default.php
    │   │   ├── tpls/
    │   │   │   ├── closeSurvey.tpl
    │   │   │   ├── detailsurveyquestions.tpl
    │   │   │   ├── editsurveyquestions.tpl
    │   │   │   ├── reports.tpl
    │   │   │   └── Reports/
    │   │   │       ├── checkbox.tpl
    │   │   │       ├── matrix.tpl
    │   │   │       ├── option.tpl
    │   │   │       └── other.tpl
    │   │   ├── Utils/
    │   │   │   └── utils.php
    │   │   └── views/
    │   │       └── view.reports.php
    │   ├── Tasks/
    │   │   ├── field_arrays.php
    │   │   ├── Menu.php
    │   │   ├── MyTasks.html
    │   │   ├── MyTasks.php
    │   │   ├── Save.php
    │   │   ├── Task.php
    │   │   ├── TasksQuickCreate.php
    │   │   ├── vardefs.php
    │   │   ├── Dashlets/
    │   │   │   └── MyTasksDashlet/
    │   │   │       ├── MyTasksDashlet.data.php
    │   │   │       ├── MyTasksDashlet.meta.php
    │   │   │       └── MyTasksDashlet.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── additionalDetails.php
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── quickcreatedefs.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   ├── studio.php
    │   │   │   ├── subpaneldefs.php
    │   │   │   └── subpanels/
    │   │   │       ├── default.php
    │   │   │       ├── ForActivities.php
    │   │   │       ├── ForEmails.php
    │   │   │       └── ForHistory.php
    │   │   ├── tpls/
    │   │   │   ├── additionalDetails.body.tpl
    │   │   │   ├── additionalDetails.caption.tpl
    │   │   │   └── QuickCreate.tpl
    │   │   └── views/
    │   │       └── view.edit.php
    │   ├── TemplateSectionLine/
    │   │   ├── TemplateSectionLine.php
    │   │   ├── TemplateSectionLine_sugar.php
    │   │   ├── vardefs.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   └── metadata/
    │   │       ├── dashletviewdefs.php
    │   │       ├── detailviewdefs.php
    │   │       ├── editviewdefs.php
    │   │       ├── listviewdefs.php
    │   │       ├── metafiles.php
    │   │       ├── popupdefs.php
    │   │       ├── quickcreatedefs.php
    │   │       ├── searchdefs.php
    │   │       ├── SearchFields.php
    │   │       └── subpanels/
    │   │           └── default.php
    │   ├── Trackers/
    │   │   ├── BreadCrumbStack.php
    │   │   ├── config.php
    │   │   ├── Metric.php
    │   │   ├── populateSeedData.php
    │   │   ├── Trackable.php
    │   │   ├── Tracker.php
    │   │   ├── TrackerManager.php
    │   │   ├── vardefs.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── monitor/
    │   │   │   ├── BlankMonitor.php
    │   │   │   ├── Monitor.php
    │   │   │   └── tracker_monitor.php
    │   │   └── store/
    │   │       ├── DatabaseStore.php
    │   │       ├── Store.php
    │   │       ├── SugarLogStore.php
    │   │       ├── TrackerQueriesDatabaseStore.php
    │   │       └── TrackerSessionsDatabaseStore.php
    │   ├── UpgradeWizard/
    │   │   ├── cancel.php
    │   │   ├── commit.php
    │   │   ├── commitJson.php
    │   │   ├── deleteCache.php
    │   │   ├── end.php
    │   │   ├── index.php
    │   │   ├── layouts.php
    │   │   ├── Menu.php
    │   │   ├── PasswordExpirationService.php
    │   │   ├── preflight.php
    │   │   ├── preflightJson.php
    │   │   ├── SILENTUPGRADE.md
    │   │   ├── silentUpgrade.php
    │   │   ├── silentUpgrade_dce_step1.php
    │   │   ├── silentUpgrade_dce_step2.php
    │   │   ├── silentUpgrade_step1.php
    │   │   ├── silentUpgrade_step2.php
    │   │   ├── start.php
    │   │   ├── systemCheck.php
    │   │   ├── systemCheckJson.php
    │   │   ├── upgradeMetaHelper.php
    │   │   ├── UpgradeRemoval.php
    │   │   ├── upgradeTimeCounter.php
    │   │   ├── upgradeWizard.js
    │   │   ├── upload.php
    │   │   ├── UploadFileCheck.php
    │   │   ├── uw_ajax.php
    │   │   ├── uw_emptyFunctions.php
    │   │   ├── uw_files.php
    │   │   ├── uw_main.tpl
    │   │   ├── uw_utils.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── SugarMerge/
    │   │   │   ├── DetailViewMerge.php
    │   │   │   ├── EditViewMerge.php
    │   │   │   ├── ListViewMerge.php
    │   │   │   ├── QuickCreateMerge.php
    │   │   │   ├── SearchMerge.php
    │   │   │   ├── SubpanelMerge.php
    │   │   │   └── SugarMerge.php
    │   │   └── tpls/
    │   │       └── layoutsMerge.tpl
    │   ├── UserPreferences/
    │   │   ├── controller.php
    │   │   ├── field_arrays.php
    │   │   ├── index.php
    │   │   ├── UserPreference.php
    │   │   └── vardefs.php
    │   ├── Users/
    │   │   ├── _baseEmail.tpl
    │   │   ├── Authenticate.php
    │   │   ├── ChangeGroupTab.php
    │   │   ├── Changenewpassword.php
    │   │   ├── Changenewpassword.tpl
    │   │   ├── ChangePassword.php
    │   │   ├── controller.php
    │   │   ├── DetailView.js
    │   │   ├── entryPointSaveGoogleApiKey.php
    │   │   ├── Error.php
    │   │   ├── field_arrays.php
    │   │   ├── Forms.php
    │   │   ├── GeneratePassword.php
    │   │   ├── GoogleApiKeySaverEntryPoint.php
    │   │   ├── googleApiKeySaverEntryPointError.tpl
    │   │   ├── ListRoles.php
    │   │   ├── LoggedOut.php
    │   │   ├── LoggedOut.tpl
    │   │   ├── login.css
    │   │   ├── login.js
    │   │   ├── Login.php
    │   │   ├── login.tpl
    │   │   ├── Logout.php
    │   │   ├── Menu.php
    │   │   ├── password_utils.php
    │   │   ├── PasswordRequirementBox.css
    │   │   ├── PasswordRequirementBox.js
    │   │   ├── Popup_picker.html
    │   │   ├── Popup_Users_picker.html
    │   │   ├── PopupSignature.php
    │   │   ├── PopupUsers.php
    │   │   ├── reassignUserRecords.php
    │   │   ├── SaveSignature.php
    │   │   ├── SaveTimezone.php
    │   │   ├── SetTimezone.php
    │   │   ├── SetTimezone.tpl
    │   │   ├── UpdateTourStatus.php
    │   │   ├── User.js
    │   │   ├── User.php
    │   │   ├── UserEditView.js
    │   │   ├── UserEmailOptions.tpl
    │   │   ├── UserEmailSettings.tpl
    │   │   ├── UserEmailSettingsAccountDetails.tpl
    │   │   ├── UserEmailSettingsAccounts.tpl
    │   │   ├── UserEmailSettingsGeneral.tpl
    │   │   ├── UserSignature.php
    │   │   ├── UserSignatureEditView.html
    │   │   ├── UserViewHelper.php
    │   │   ├── vardefs.php
    │   │   ├── authentication/
    │   │   │   ├── AuthenticationController.php
    │   │   │   ├── EmailAuthenticate/
    │   │   │   │   ├── EmailAuthenticate.php
    │   │   │   │   └── EmailAuthenticateUser.php
    │   │   │   ├── LDAPAuthenticate/
    │   │   │   │   ├── LDAPAuthenticate.php
    │   │   │   │   ├── LDAPAuthenticateUser.php
    │   │   │   │   └── LDAPConfigs/
    │   │   │   │       └── default.php
    │   │   │   ├── SAML2Authenticate/
    │   │   │   │   ├── SAML2Authenticate.php
    │   │   │   │   ├── SAML2AuthenticateUser.php
    │   │   │   │   ├── SAML2Metadata.php
    │   │   │   │   └── lib/
    │   │   │   │       └── onelogin/
    │   │   │   │           └── settings.php
    │   │   │   └── SugarAuthenticate/
    │   │   │       ├── FactorAuthEmailCode.php
    │   │   │       ├── FactorAuthEmailCode.tpl
    │   │   │       ├── FactorAuthFactory.php
    │   │   │       ├── FactorAuthInterface.php
    │   │   │       ├── SugarAuthenticate.php
    │   │   │       └── SugarAuthenticateUser.php
    │   │   ├── language/
    │   │   │   └── en_us.lang.php
    │   │   ├── metadata/
    │   │   │   ├── additionalDetails.php
    │   │   │   ├── detailgroupviewdefs.php
    │   │   │   ├── detailviewdefs.php
    │   │   │   ├── editgroupviewdefs.php
    │   │   │   ├── editviewdefs.php
    │   │   │   ├── listviewdefs.php
    │   │   │   ├── popupdefs.php
    │   │   │   ├── quickcreatedefs.php
    │   │   │   ├── reassignScriptMetadata.php
    │   │   │   ├── searchdefs.php
    │   │   │   ├── SearchFields.php
    │   │   │   ├── studio.php
    │   │   │   ├── subpaneldefs.php
    │   │   │   └── subpanels/
    │   │   │       ├── default.php
    │   │   │       ├── ForCalls.php
    │   │   │       ├── ForEmails.php
    │   │   │       ├── ForMeetings.php
    │   │   │       ├── ForProject.php
    │   │   │       ├── ForProspectLists.php
    │   │   │       ├── ForSecurityGroups.php
    │   │   │       └── ForTeams.php
    │   │   ├── tpls/
    │   │   │   ├── DetailView.tpl
    │   │   │   ├── EditViewFooter.tpl
    │   │   │   ├── EditViewGroup.tpl
    │   │   │   ├── EditViewHeader.tpl
    │   │   │   ├── QuickEditFooter.tpl
    │   │   │   └── wizard.tpl
    │   │   └── views/
    │   │       ├── view.detail.php
    │   │       ├── view.edit.php
    │   │       ├── view.list.php
    │   │       ├── view.quickedit.php
    │   │       └── view.wizard.php
    │   └── vCals/
    │       ├── field_arrays.php
    │       ├── HTTP_WebDAV_Server_vCal.php
    │       ├── Server.php
    │       ├── vardefs.php
    │       └── vCal.php
    ├── service/
    │   ├── core/
    │   │   ├── NusoapSoap.php
    │   │   ├── PHP5Soap.php
    │   │   ├── SoapHelperWebService.php
    │   │   ├── SugarRestService.php
    │   │   ├── SugarRestServiceImpl.php
    │   │   ├── SugarRestUtils.php
    │   │   ├── SugarSoapService.php
    │   │   ├── SugarWebService.php
    │   │   ├── SugarWebServiceImpl.php
    │   │   ├── webservice.php
    │   │   ├── WSDL.tpl
    │   │   └── REST/
    │   │       ├── SugarRest.php
    │   │       ├── SugarRestJSON.php
    │   │       └── SugarRestRSS.php
    │   ├── JsonRPCServer/
    │   │   ├── JsonRPCServer.php
    │   │   ├── JsonRPCServerCalls.php
    │   │   └── JsonRPCServerUtils.php
    │   ├── utils/
    │   │   └── SugarRest.js
    │   ├── v2/
    │   │   ├── registry.php
    │   │   ├── rest.php
    │   │   ├── soap.php
    │   │   └── SugarSoapService2.php
    │   ├── v2_1/
    │   │   ├── registry.php
    │   │   ├── rest.php
    │   │   ├── soap.php
    │   │   └── SugarWebServiceImplv2_1.php
    │   ├── v3/
    │   │   ├── registry.php
    │   │   ├── rest.php
    │   │   ├── soap.php
    │   │   ├── SugarWebServiceImplv3.php
    │   │   └── SugarWebServiceUtilv3.php
    │   ├── v3_1/
    │   │   ├── registry.php
    │   │   ├── rest.php
    │   │   ├── soap.php
    │   │   ├── SugarWebServiceImplv3_1.php
    │   │   └── SugarWebServiceUtilv3_1.php
    │   ├── v4/
    │   │   ├── registry.php
    │   │   ├── rest.php
    │   │   ├── soap.php
    │   │   ├── SugarWebServiceImplv4.php
    │   │   └── SugarWebServiceUtilv4.php
    │   └── v4_1/
    │       ├── registry.php
    │       ├── rest.php
    │       ├── soap.php
    │       ├── SugarWebServiceImplv4_1.php
    │       └── SugarWebServiceUtilv4_1.php
    ├── soap/
    │   ├── SoapData.php
    │   ├── SoapDeprecated.php
    │   ├── SoapError.php
    │   ├── SoapErrorDefinitions.php
    │   ├── SoapHelperFunctions.php
    │   ├── SoapPortalHelper.php
    │   ├── SoapPortalUsers.php
    │   ├── SoapRelationshipHelper.php
    │   ├── SoapStudio.php
    │   ├── SoapSugarUsers.php
    │   └── SoapTypes.php
    ├── tests/
    │   ├── README.md
    │   ├── _bootstrap.php
    │   ├── acceptance.suite.yml
    │   ├── api.suite.yml
    │   ├── bootstrap.php
    │   ├── config.test.dist.php
    │   ├── install.php
    │   ├── install.suite.yml
    │   ├── phpunit.xml.dist
    │   ├── runtests.sh
    │   ├── testinstall.php
    │   ├── travis_config_si.php
    │   ├── unit.suite.dist.yml
    │   ├── unit.suite.yml
    │   ├── _data/
    │   │   ├── api_data.sql
    │   │   ├── demo_users.sql
    │   │   └── dump.sql
    │   ├── _envs/
    │   │   ├── custom.dist.yml
    │   │   └── travis-ci-hub.yml
    │   ├── _support/
    │   │   ├── AcceptanceTester.php
    │   │   ├── ApiTester.php
    │   │   ├── InstallTester.php
    │   │   ├── ModuleFields.php
    │   │   ├── UnitTester.php
    │   │   ├── Helper/
    │   │   │   ├── Acceptance.php
    │   │   │   ├── api.php
    │   │   │   ├── Install.php
    │   │   │   ├── PhpBrowserDriverHelper.php
    │   │   │   ├── Unit.php
    │   │   │   └── WebDriverHelper.php
    │   │   ├── Page/
    │   │   │   ├── AccountsModule.php
    │   │   │   ├── BasicModule.php
    │   │   │   ├── CompanyModule.php
    │   │   │   ├── Design.php
    │   │   │   ├── FileModule.php
    │   │   │   ├── IssueModule.php
    │   │   │   ├── PersonModule.php
    │   │   │   └── SaleModule.php
    │   │   └── Step/
    │   │       └── Acceptance/
    │   │           ├── Accounts.php
    │   │           ├── AccountsTester.php
    │   │           ├── Administration.php
    │   │           ├── Calls.php
    │   │           ├── Campaigns.php
    │   │           ├── Cases.php
    │   │           ├── Contacts.php
    │   │           ├── Contracts.php
    │   │           ├── Dashboard.php
    │   │           ├── DetailView.php
    │   │           ├── EditView.php
    │   │           ├── EmailManTester.php
    │   │           ├── Events.php
    │   │           ├── InboundEmailTester.php
    │   │           ├── Invoices.php
    │   │           ├── KnowledgeBase.php
    │   │           ├── KnowledgeBaseCategories.php
    │   │           ├── Leads.php
    │   │           ├── ListView.php
    │   │           ├── Locations.php
    │   │           ├── Maps.php
    │   │           ├── MapsAddressCache.php
    │   │           ├── MapsMarkers.php
    │   │           ├── Meetings.php
    │   │           ├── ModuleBuilder.php
    │   │           ├── NavigationBarTester.php
    │   │           ├── Opportunities.php
    │   │           ├── PDFTemplates.php
    │   │           ├── ProductCategories.php
    │   │           ├── Products.php
    │   │           ├── Projects.php
    │   │           ├── ProjectTemplates.php
    │   │           ├── Repair.php
    │   │           ├── Reports.php
    │   │           ├── SideBar.php
    │   │           ├── UsersTester.php
    │   │           └── Workflow.php
    │   ├── acceptance/
    │   │   ├── _bootstrap.php
    │   │   ├── LoginCest.php
    │   │   ├── Core/
    │   │   │   ├── BasicModuleCest.php
    │   │   │   ├── CompanyModuleCest.php
    │   │   │   ├── FileModuleCest.php
    │   │   │   ├── IssueModuleCest.php
    │   │   │   ├── ModuleBuilderFieldsCest.php
    │   │   │   ├── PersonModuleCest.php
    │   │   │   └── SaleModuleCest.php
    │   │   └── modules/
    │   │       ├── Accounts/
    │   │       │   └── AccountsCest.php
    │   │       ├── Activities/
    │   │       │   └── ActivitiesCest.php
    │   │       ├── AM_Project_Templates/
    │   │       │   └── AM_Project_TemplatesCest.php
    │   │       ├── AOK_Knowledge_Base_Categories/
    │   │       │   └── AOK_Knowledge_Base_CategoriesCest.php
    │   │       ├── AOK_KnowledgeBase/
    │   │       │   └── AOK_KnowledgeBaseCest.php
    │   │       ├── AOR_Reports/
    │   │       │   └── AOR_ReportsCest.php
    │   │       ├── AOS_PDF_Templates/
    │   │       │   └── AOS_PDF_TemplatesCest.php
    │   │       ├── AOS_Product_Categories/
    │   │       │   └── AOS_Product_CategoriesCest.php
    │   │       ├── AOS_Products/
    │   │       │   └── AOS_ProductsCest.php
    │   │       ├── AOW_Workflow/
    │   │       │   └── AOW_WorkflowCest.php
    │   │       ├── Calendar/
    │   │       │   └── CalendarCest.php
    │   │       ├── Calls/
    │   │       │   └── CallsCest.php
    │   │       ├── Campaigns/
    │   │       │   └── CampaignsCest.php
    │   │       ├── Cases/
    │   │       │   └── CasesCest.php
    │   │       ├── Contacts/
    │   │       │   └── ContactsCest.php
    │   │       ├── Contracts/
    │   │       │   └── ContractsCest.php
    │   │       ├── Documents/
    │   │       │   └── DocumentsCest.php
    │   │       ├── EmailMan/
    │   │       │   └── EmailManCest.php
    │   │       ├── Emails/
    │   │       │   └── EmailsCest.php
    │   │       ├── EmailTemplates/
    │   │       │   └── EmailTemplatesCest.php
    │   │       ├── FP_Event_Locations/
    │   │       │   └── FP_Event_LocationsCest.php
    │   │       ├── FP_Events/
    │   │       │   └── FP_EventsCest.php
    │   │       ├── History/
    │   │       │   └── HistoryCest.php
    │   │       ├── Invoices/
    │   │       │   └── InvoicesCest.php
    │   │       ├── jjwg_Address_Cache/
    │   │       │   └── jjwg_Address_CacheCest.php
    │   │       ├── jjwg_Areas/
    │   │       │   └── jjwg_AreasCest.php
    │   │       ├── jjwg_Maps/
    │   │       │   └── jjwg_MapsCest.php
    │   │       ├── jjwg_Markers/
    │   │       │   └── jjwg_MarkersCest.php
    │   │       ├── Leads/
    │   │       │   └── LeadsCest.php
    │   │       ├── Meetings/
    │   │       │   └── MeetingsCest.php
    │   │       ├── Notes/
    │   │       │   └── NotesCest.php
    │   │       ├── Opportunities/
    │   │       │   └── OpportunitiesCest.php
    │   │       ├── Projects/
    │   │       │   └── ProjectsCest.php
    │   │       ├── Quotes/
    │   │       │   └── QuotesCest.php
    │   │       ├── Spots/
    │   │       │   └── SpotsCest.php
    │   │       ├── Surveys/
    │   │       │   └── SurveysCest.php
    │   │       ├── TargetLists/
    │   │       │   └── TargetListsCest.php
    │   │       ├── Targets/
    │   │       │   └── TargetsCest.php
    │   │       ├── Tasks/
    │   │       │   └── TasksCest.php
    │   │       └── Users/
    │   │           └── UsersCest.php
    │   ├── api/
    │   │   ├── _bootstrap.php
    │   │   ├── V8/
    │   │   │   ├── CreateModuleCest.php
    │   │   │   ├── CreateRelationShipByLinkCest.php
    │   │   │   ├── CreateRelationShipCest.php
    │   │   │   ├── DeleteModuleCest.php
    │   │   │   ├── DeleteRelationShipCest.php
    │   │   │   ├── GetFieldsMetaCest.php
    │   │   │   ├── GetModuleCest.php
    │   │   │   ├── GetModulesCest.php
    │   │   │   ├── GetModulesMetaCest.php
    │   │   │   ├── GetRecordsCest.php
    │   │   │   └── GetRelationshipCest.php
    │   │   └── v8/
    │   │       ├── ModulesCest.php
    │   │       ├── ModulesMetaCest.php
    │   │       └── OAuth2Cest.php
    │   ├── install/
    │   │   ├── _bootstrap.php
    │   │   └── UserWizardCest.php
    │   ├── SuiteCRM/
    │   │   ├── Enumerator/
    │   │   │   ├── DatabaseDriver.php
    │   │   │   ├── DesignBreakPoint.php
    │   │   │   └── SugarObjectType.php
    │   │   └── Test/
    │   │       ├── BeanFactoryTestCase.php
    │   │       ├── SuitePHPUnitFrameworkTestCase.php
    │   │       ├── TestLogger.php
    │   │       └── Driver/
    │   │           ├── PhpBrowserDriver.php
    │   │           └── WebDriver.php
    │   └── unit/
    │       ├── _bootstrap.php
    │       └── phpunit/
    │           ├── ConfigTest.php
    │           ├── Api/
    │           │   └── Core/
    │           │       └── Loader/
    │           │           ├── CustomLoaderTest.php
    │           │           ├── testArray.php
    │           │           ├── testArrayWrong.php
    │           │           └── testRoutes.php
    │           ├── data/
    │           │   ├── BeanFactoryTest.php
    │           │   ├── SugarBeanMock.php
    │           │   └── SugarBeanTest.php
    │           ├── includes/
    │           │   ├── CleanCSVTest.php
    │           │   ├── ErrorMessageTest.php
    │           │   ├── JsonApiErrorObjectTest.php
    │           │   ├── LangExceptionTest.php
    │           │   ├── LangTextTest.php
    │           │   ├── SugarDateTimeTest.php
    │           │   ├── TimeDateTest.php
    │           │   ├── UtilsTest.php
    │           │   ├── database/
    │           │   │   └── DBManagerTest.php
    │           │   ├── GoogleSync/
    │           │   │   ├── GoogleSyncMock.php
    │           │   │   └── GoogleSyncTest.php
    │           │   ├── Imap/
    │           │   │   ├── ImapHandlerFactoryTest.php
    │           │   │   └── ImapTestSettingsEntryHandlerTest.php
    │           │   ├── Localization/
    │           │   │   └── LocalizationTest.php
    │           │   ├── MVC/
    │           │   │   ├── SugarApplicationTest.php
    │           │   │   ├── SugarModuleTest.php
    │           │   │   ├── Controller/
    │           │   │   │   ├── ControllerFactoryTest.php
    │           │   │   │   └── SugarControllerTest.php
    │           │   │   └── View/
    │           │   │       ├── SugarViewTest.php
    │           │   │       ├── ViewFactoryTest.php
    │           │   │       └── views/
    │           │   │           ├── ViewAjaxTest.php
    │           │   │           ├── ViewAjaxUITest.php
    │           │   │           ├── ViewClassicTest.php
    │           │   │           ├── ViewDetailTest.php
    │           │   │           ├── ViewEditTest.php
    │           │   │           ├── ViewHtmlTest.php
    │           │   │           ├── ViewImportvcardsaveTest.php
    │           │   │           ├── ViewImportvcardTest.php
    │           │   │           ├── ViewJsonTest.php
    │           │   │           ├── ViewListTest.php
    │           │   │           ├── ViewMetadataTest.php
    │           │   │           ├── ViewModulelistmenuTest.php
    │           │   │           ├── ViewMultieditTest.php
    │           │   │           ├── ViewNoaccessTest.php
    │           │   │           ├── ViewPopupTest.php
    │           │   │           ├── ViewQuickcreateTest.php
    │           │   │           ├── ViewQuickeditTest.php
    │           │   │           ├── ViewQuickTest.php
    │           │   │           ├── ViewSerializedTest.php
    │           │   │           ├── ViewSugarpdfTest.php
    │           │   │           ├── ViewVcardTest.php
    │           │   │           └── ViewXMLTest.php
    │           │   ├── SubPanel/
    │           │   │   └── SubPanelTest.php
    │           │   ├── SugarEmailAddress/
    │           │   │   └── SugarEmailAddressTest.php
    │           │   ├── SugarFolders/
    │           │   │   └── SugarFolderTest.php
    │           │   ├── SugarLogger/
    │           │   │   └── LoggerManagerTest.php
    │           │   ├── SugarObjects/
    │           │   │   └── templates/
    │           │   │       └── PersonTest.php
    │           │   ├── SugarTheme/
    │           │   │   └── SugarThemeTest.php
    │           │   └── utils/
    │           │       ├── activity_utilsTest.php
    │           │       ├── array_utilsTest.php
    │           │       ├── db_utilsTest.php
    │           │       ├── encryption_utilsTest.php
    │           │       ├── file_utilsTest.php
    │           │       ├── layout_utilsTest.php
    │           │       ├── logic_utilsTest.php
    │           │       ├── LogicHookTest.php
    │           │       ├── mvc_utilsTest.php
    │           │       ├── php_zip_utilsTest.php
    │           │       ├── progress_bar_utilsTest.php
    │           │       ├── security_utilsTest.php
    │           │       └── SugarAutoLoaderTest.php
    │           ├── lib/
    │           │   ├── Exception/
    │           │   │   ├── ExceptionTest.php
    │           │   │   └── MalwareFoundTest.php
    │           │   ├── PDF/
    │           │   │   └── PDFWrapperTest.php
    │           │   ├── Search/
    │           │   │   └── UI/
    │           │   │       └── SearchResultsControllerTest.php
    │           │   └── SuiteCRM/
    │           │       ├── Log/
    │           │       │   └── CliLoggerHandlerTest.php
    │           │       ├── Robo/
    │           │       │   └── Commands/
    │           │       │       └── CodeCoverageCommandsTest.php
    │           │       ├── Search/
    │           │       │   ├── AbstractDocumentifierMock.php
    │           │       │   ├── AbstractDocumentifierTest.php
    │           │       │   ├── AbstractIndexerTest.php
    │           │       │   ├── SearchDefsDocumentifierTest.php
    │           │       │   ├── SearchEngineMock.php
    │           │       │   ├── SearchInstallTest.php
    │           │       │   ├── SearchQueryTest.php
    │           │       │   ├── SearchTestAbstract.php
    │           │       │   ├── SearchWrapperTest.php
    │           │       │   ├── ElasticSearch/
    │           │       │   │   ├── ElasticSearchClientBuilderTest.php
    │           │       │   │   ├── ElasticSearchEngineTest.php
    │           │       │   │   ├── ElasticSearchIndexerTest.php
    │           │       │   │   ├── ElasticSearchInstallTest.php
    │           │       │   │   └── TestData/
    │           │       │   │       └── ElasticsearchServerConfig.json
    │           │       │   └── TestCustomEngines/
    │           │       │       ├── BadMockSearch.php
    │           │       │       └── MockSearch.php
    │           │       └── Utility/
    │           │           ├── ArrayMapperTest.php
    │           │           ├── BeanJsonSerializerTest.php
    │           │           ├── CurrentLanguageTest.php
    │           │           ├── ModuleLanguageTest.php
    │           │           ├── PathsTest.php
    │           │           ├── StringValidatorTest.php
    │           │           ├── SuiteLoggerTest.php
    │           │           ├── AntiMalware/
    │           │           │   ├── FileScannerTest.php
    │           │           │   └── Providers/
    │           │           │       ├── ClamAVTest.php
    │           │           │       └── SophosAntiVirusTest.php
    │           │           └── BeanJsonSerializerTestData/
    │           │               ├── AccountBean.expected.json
    │           │               ├── AccountBean.json
    │           │               ├── BeanMock.php
    │           │               ├── ContactBean.expected.json
    │           │               └── ContactBean.json
    │           ├── modules/
    │           │   ├── Accounts/
    │           │   │   └── AccountTest.php
    │           │   ├── ACLActions/
    │           │   │   └── ACLActionTest.php
    │           │   ├── ACLRoles/
    │           │   │   └── ACLRoleTest.php
    │           │   ├── Administration/
    │           │   │   ├── AdministrationTest.php
    │           │   │   ├── BaseHandlerTest.php
    │           │   │   ├── GoogleCalendarSettingsHandlerMock.php
    │           │   │   └── GoogleCalendarSettingsHandlerTest.php
    │           │   ├── Alerts/
    │           │   │   └── AlertTest.php
    │           │   ├── AM_ProjectTemplates/
    │           │   │   └── AM_ProjectTemplatesTest.php
    │           │   ├── AM_TaskTemplates/
    │           │   │   └── AM_TaskTemplatesTest.php
    │           │   ├── AOD_Index/
    │           │   │   └── AOD_IndexTest.php
    │           │   ├── AOD_IndexEvent/
    │           │   │   └── AOD_IndexEventTest.php
    │           │   ├── AOK_Knowledge_Base_Categories/
    │           │   │   └── AOK_Knowledge_Base_CategoriesTest.php
    │           │   ├── AOK_KnowledgeBase/
    │           │   │   └── AOK_KnowledgeBaseTest.php
    │           │   ├── AOP_Case_Events/
    │           │   │   └── AOP_Case_EventsTest.php
    │           │   ├── AOP_Case_Updates/
    │           │   │   └── AOP_Case_UpdatesTest.php
    │           │   ├── AOR_Charts/
    │           │   │   └── AOR_ChartTest.php
    │           │   ├── AOR_Conditions/
    │           │   │   └── AOR_ConditionTest.php
    │           │   ├── AOR_Fields/
    │           │   │   └── AOR_FieldTest.php
    │           │   ├── AOR_Reports/
    │           │   │   └── AOR_ReportTest.php
    │           │   ├── AOR_Scheduled_Reports/
    │           │   │   └── AOR_Scheduled_ReportsTest.php
    │           │   ├── AOS_Contracts/
    │           │   │   └── AOS_ContractsTest.php
    │           │   ├── AOS_Invoices/
    │           │   │   └── AOS_InvoicesTest.php
    │           │   ├── AOS_Line_Item_Groups/
    │           │   │   └── AOS_Line_Item_GroupsTest.php
    │           │   ├── AOS_PDF_Templates/
    │           │   │   └── AOS_PDF_TemplatesTest.php
    │           │   ├── AOS_Product_Categories/
    │           │   │   └── AOS_Product_CategoriesTest.php
    │           │   ├── AOS_Products/
    │           │   │   └── AOS_ProductsTest.php
    │           │   ├── AOS_Products_Quotes/
    │           │   │   └── AOS_Products_QuotesTest.php
    │           │   ├── AOS_Quotes/
    │           │   │   └── AOS_QuotesTest.php
    │           │   ├── AOW_Actions/
    │           │   │   └── AOW_ActionTest.php
    │           │   ├── AOW_Conditions/
    │           │   │   └── AOW_ConditionTest.php
    │           │   ├── AOW_Processed/
    │           │   │   └── AOW_ProcessedTest.php
    │           │   ├── AOW_WorkFlow/
    │           │   │   └── AOW_WorkFlowTest.php
    │           │   ├── Audit/
    │           │   │   ├── AuditTest.php
    │           │   │   └── PopupPickerTest.php
    │           │   ├── Bugs/
    │           │   │   └── BugTest.php
    │           │   ├── Calls/
    │           │   │   └── CallTest.php
    │           │   ├── Calls_Reschedule/
    │           │   │   └── Calls_RescheduleTest.php
    │           │   ├── CampaignLog/
    │           │   │   └── CampaignLogTest.php
    │           │   ├── Campaigns/
    │           │   │   └── CampaignTest.php
    │           │   ├── CampaignTrackers/
    │           │   │   └── CampaignTrackerTest.php
    │           │   ├── Cases/
    │           │   │   └── aCaseTest.php
    │           │   ├── Contacts/
    │           │   │   └── ContactTest.php
    │           │   ├── Currencies/
    │           │   │   └── CurrencyTest.php
    │           │   ├── DocumentRevisions/
    │           │   │   └── DocumentRevisionTest.php
    │           │   ├── Documents/
    │           │   │   └── DocumentTest.php
    │           │   ├── EAPM/
    │           │   │   └── EAPMTest.php
    │           │   ├── EmailAddresses/
    │           │   │   └── EmailAddressTest.php
    │           │   ├── EmailMan/
    │           │   │   └── EmailManTest.php
    │           │   ├── EmailMarketing/
    │           │   │   └── EmailMarketingTest.php
    │           │   ├── Emails/
    │           │   │   ├── EmailFromValidatorTest.php
    │           │   │   ├── EmailMock.php
    │           │   │   ├── EmailTest.php
    │           │   │   ├── InboundEmailMock.php
    │           │   │   ├── NonGmailSentFolderHandlerMock.php
    │           │   │   ├── NonGmailSentFolderHandlerTest.php
    │           │   │   └── SugarPHPMailerMock.php
    │           │   ├── EmailTemplates/
    │           │   │   └── EmailTemplateTest.php
    │           │   ├── EmailText/
    │           │   │   └── EmailTextTest.php
    │           │   ├── Employees/
    │           │   │   └── EmployeeTest.php
    │           │   ├── Favorites/
    │           │   │   └── FavoritesTest.php
    │           │   ├── FP_Event_Locations/
    │           │   │   └── FP_Event_LocationsTest.php
    │           │   ├── FP_events/
    │           │   │   └── FP_eventsTest.php
    │           │   ├── Groups/
    │           │   │   └── GroupTest.php
    │           │   ├── iCals/
    │           │   │   └── iCalTest.php
    │           │   ├── InboundEmail/
    │           │   │   └── InboundEmailTest.php
    │           │   ├── jjwg_Address_Cache/
    │           │   │   └── jjwg_Address_CacheTest.php
    │           │   ├── jjwg_Areas/
    │           │   │   └── jjwg_AreasTest.php
    │           │   ├── jjwg_Maps/
    │           │   │   └── jjwg_MapsTest.php
    │           │   ├── jjwg_Markers/
    │           │   │   └── jjwg_MarkersTest.php
    │           │   ├── Leads/
    │           │   │   └── LeadTest.php
    │           │   ├── Meetings/
    │           │   │   └── MeetingTest.php
    │           │   ├── MergeRecords/
    │           │   │   └── MergeRecordTest.php
    │           │   ├── Notes/
    │           │   │   └── NoteTest.php
    │           │   ├── OAuthKeys/
    │           │   │   └── OAuthKeyTest.php
    │           │   ├── OAuthTokens/
    │           │   │   └── OAuthTokenTest.php
    │           │   ├── Opportunities/
    │           │   │   └── OpportunityTest.php
    │           │   ├── Project/
    │           │   │   └── ProjectTest.php
    │           │   ├── ProjectTask/
    │           │   │   └── ProjectTaskTest.php
    │           │   ├── ProspectLists/
    │           │   │   └── ProspectListTest.php
    │           │   ├── Prospects/
    │           │   │   └── ProspectTest.php
    │           │   ├── Relationships/
    │           │   │   └── RelationshipTest.php
    │           │   ├── Releases/
    │           │   │   └── ReleaseTest.php
    │           │   ├── Roles/
    │           │   │   └── RoleTest.php
    │           │   ├── SavedSearch/
    │           │   │   └── SavedSearchTest.php
    │           │   ├── Schedulers/
    │           │   │   └── SchedulerTest.php
    │           │   ├── SchedulersJobs/
    │           │   │   └── SchedulersJobTest.php
    │           │   ├── SecurityGroups/
    │           │   │   └── SecurityGroupTest.php
    │           │   ├── SugarFeed/
    │           │   │   └── SugarFeedTest.php
    │           │   ├── Tasks/
    │           │   │   └── TaskTest.php
    │           │   ├── Trackers/
    │           │   │   └── TrackerTest.php
    │           │   ├── UserPreferences/
    │           │   │   └── UserPreferenceTest.php
    │           │   ├── Users/
    │           │   │   ├── GoogleApiKeySaverEntryPointMock.php
    │           │   │   ├── GoogleApiKeySaverEntryPointTest.php
    │           │   │   ├── SAML2AuthenticateTest.php
    │           │   │   └── UserTest.php
    │           │   └── vCals/
    │           │       └── vCalTest.php
    │           └── service/
    │               └── v4/
    │                   └── SugarWebServiceUtilv4Test.php
    ├── themes/
    │   ├── default/
    │   │   ├── css/
    │   │   │   ├── bootstrap.css
    │   │   │   ├── chart.css
    │   │   │   ├── deprecated.css
    │   │   │   ├── print.css
    │   │   │   ├── style.css
    │   │   │   └── wizard.css
    │   │   ├── font/
    │   │   │   ├── fontawesome-webfont.eot
    │   │   │   ├── fontawesome-webfont.svgz
    │   │   │   ├── fontawesome-webfont.ttf
    │   │   │   └── fontawesome-webfont.woff
    │   │   ├── images/
    │   │   │   └── sugarColors.xml
    │   │   ├── js/
    │   │   │   └── style.js
    │   │   └── less/
    │   │       ├── accordion.less
    │   │       ├── alerts.less
    │   │       ├── bootstrap-mobile.less
    │   │       ├── bootstrap.less
    │   │       ├── breadcrumbs.less
    │   │       ├── button-groups.less
    │   │       ├── buttons.less
    │   │       ├── carousel.less
    │   │       ├── chosen.less
    │   │       ├── close.less
    │   │       ├── code.less
    │   │       ├── component-animations.less
    │   │       ├── dropdowns.less
    │   │       ├── font-awesome.less
    │   │       ├── forms.less
    │   │       ├── grid.less
    │   │       ├── hero-unit.less
    │   │       ├── labels.less
    │   │       ├── layouts.less
    │   │       ├── mixins.less
    │   │       ├── modals.less
    │   │       ├── navbar.less
    │   │       ├── navs.less
    │   │       ├── pager.less
    │   │       ├── pagination.less
    │   │       ├── popovers.less
    │   │       ├── progress-bars.less
    │   │       ├── reset.less
    │   │       ├── responsive.less
    │   │       ├── scaffolding.less
    │   │       ├── sprites.less
    │   │       ├── sugar.less
    │   │       ├── sugarmobile.less
    │   │       ├── tables.less
    │   │       ├── thumbnails.less
    │   │       ├── tooltip.less
    │   │       ├── type.less
    │   │       ├── utilities.less
    │   │       ├── variables.less
    │   │       └── wells.less
    │   └── SuiteP/
    │       ├── themedef.php
    │       ├── css/
    │       │   ├── bubbles.css
    │       │   ├── chart.css
    │       │   ├── colourSelector.php
    │       │   ├── dashboardstyle.css
    │       │   ├── deprecated.css
    │       │   ├── fonts.css
    │       │   ├── footable.core.css
    │       │   ├── grid.css
    │       │   ├── normalize.css
    │       │   ├── print.css
    │       │   ├── studio.css
    │       │   ├── wizard.css
    │       │   ├── bootstrap/
    │       │   │   ├── alerts.scss
    │       │   │   ├── badges.scss
    │       │   │   ├── breadcrumbs.scss
    │       │   │   ├── button-groups.scss
    │       │   │   ├── buttons.scss
    │       │   │   ├── carousel.scss
    │       │   │   ├── close.scss
    │       │   │   ├── code.scss
    │       │   │   ├── component-animations.scss
    │       │   │   ├── dropdowns.scss
    │       │   │   ├── forms.scss
    │       │   │   ├── glyphicons.scss
    │       │   │   ├── grid.scss
    │       │   │   ├── input-groups.scss
    │       │   │   ├── jumbotron.scss
    │       │   │   ├── labels.scss
    │       │   │   ├── list-group.scss
    │       │   │   ├── media.scss
    │       │   │   ├── mixins.scss
    │       │   │   ├── modals.scss
    │       │   │   ├── navbar.scss
    │       │   │   ├── navs.scss
    │       │   │   ├── normalize.scss
    │       │   │   ├── pager.scss
    │       │   │   ├── pagination.scss
    │       │   │   ├── panels.scss
    │       │   │   ├── popovers.scss
    │       │   │   ├── print.scss
    │       │   │   ├── progress-bars.scss
    │       │   │   ├── responsive-embed.scss
    │       │   │   ├── responsive-utilities.scss
    │       │   │   ├── scaffolding.scss
    │       │   │   ├── tables.scss
    │       │   │   ├── theme.scss
    │       │   │   ├── thumbnails.scss
    │       │   │   ├── tooltip.scss
    │       │   │   ├── type.scss
    │       │   │   ├── utilities.scss
    │       │   │   ├── wells.scss
    │       │   │   └── mixins/
    │       │   │       ├── alerts.scss
    │       │   │       ├── background-variant.scss
    │       │   │       ├── border-radius.scss
    │       │   │       ├── buttons.scss
    │       │   │       ├── center-block.scss
    │       │   │       ├── clearfix.scss
    │       │   │       ├── forms.scss
    │       │   │       ├── gradients.scss
    │       │   │       ├── grid-framework.scss
    │       │   │       ├── grid.scss
    │       │   │       ├── hide-text.scss
    │       │   │       ├── image.scss
    │       │   │       ├── labels.scss
    │       │   │       ├── list-group.scss
    │       │   │       ├── nav-divider.scss
    │       │   │       ├── nav-vertical-align.scss
    │       │   │       ├── opacity.scss
    │       │   │       ├── pagination.scss
    │       │   │       ├── panels.scss
    │       │   │       ├── progress-bar.scss
    │       │   │       ├── reset-filter.scss
    │       │   │       ├── reset-text.scss
    │       │   │       ├── resize.scss
    │       │   │       ├── responsive-visibility.scss
    │       │   │       ├── size.scss
    │       │   │       ├── tab-focus.scss
    │       │   │       ├── table-row.scss
    │       │   │       ├── text-emphasis.scss
    │       │   │       ├── text-overflow.scss
    │       │   │       └── vendor-prefixes.scss
    │       │   ├── Dawn/
    │       │   │   ├── color-palette.scss
    │       │   │   ├── icons.scss
    │       │   │   ├── style.css
    │       │   │   ├── style.scss
    │       │   │   └── variables.scss
    │       │   ├── Day/
    │       │   │   ├── color-palette.scss
    │       │   │   ├── icons.scss
    │       │   │   ├── style.css
    │       │   │   ├── style.scss
    │       │   │   └── variables.scss
    │       │   ├── Dusk/
    │       │   │   ├── color-palette.scss
    │       │   │   ├── icons.scss
    │       │   │   ├── style.css
    │       │   │   ├── style.scss
    │       │   │   └── variables.scss
    │       │   ├── fonts/
    │       │   │   ├── footable.eot
    │       │   │   ├── footable.ttf
    │       │   │   └── footable.woff
    │       │   ├── Night/
    │       │   │   ├── color-palette.scss
    │       │   │   ├── icons.scss
    │       │   │   ├── style.css
    │       │   │   ├── style.scss
    │       │   │   └── variables.scss
    │       │   ├── Noon/
    │       │   │   ├── color-palette.scss
    │       │   │   ├── icons.scss
    │       │   │   ├── style.css
    │       │   │   ├── style.scss
    │       │   │   └── variables.scss
    │       │   └── suitep-base/
    │       │       ├── admin.scss
    │       │       ├── aor.scss
    │       │       ├── aow.scss
    │       │       ├── calendar.scss
    │       │       ├── campaigns.scss
    │       │       ├── cases.scss
    │       │       ├── dashboard.scss
    │       │       ├── detailview.scss
    │       │       ├── editview.scss
    │       │       ├── email.scss
    │       │       ├── forms.scss
    │       │       ├── jstree.scss
    │       │       ├── listview.scss
    │       │       ├── login.scss
    │       │       ├── main.scss
    │       │       ├── mixins.scss
    │       │       ├── modal.scss
    │       │       ├── navbar.scss
    │       │       ├── panels.scss
    │       │       ├── popup.scss
    │       │       ├── projects.scss
    │       │       ├── search.scss
    │       │       ├── sidebar.scss
    │       │       ├── studio.scss
    │       │       ├── suitepicon-glyphs.scss
    │       │       ├── suitepicon.eot
    │       │       ├── suitepicon.json
    │       │       ├── suitepicon.scss
    │       │       ├── suitepicon.ttf
    │       │       ├── suitepicon.woff
    │       │       ├── suitepicon.woff2
    │       │       ├── swal.scss
    │       │       ├── tabs.scss
    │       │       ├── tinymce.scss
    │       │       └── yui.scss
    │       ├── fonts/
    │       │   ├── 1YwB1sO8YE1Lyjf12WNiUA.woff2
    │       │   ├── 2HG_tEPiQ4Z6795cGfdivFtXRa8TVwTICgirnJhmVJw.woff2
    │       │   ├── 81X-1TO5y4aMK2PPy9kFwxJtnKITppOI_IvcXXDNrsc.woff2
    │       │   ├── 9TBVFLzQ3GUZLG8FZ4yrEfesZW2xOQ-xsNqO47m55DA.woff2
    │       │   ├── AcvTq8Q0lyKKNxRlL28RnxJtnKITppOI_IvcXXDNrsc.woff2
    │       │   ├── dPJ5r9gl3kK6ijoeP1IRsvY6323mHUZFJMgTvxaG2iE.woff2
    │       │   ├── eFRpvGLEW31oiexbYNx7Y_esZW2xOQ-xsNqO47m55DA.woff2
    │       │   ├── EsvMC5un3kjyUhB9ZEPPwg.woff2
    │       │   ├── footable.eot
    │       │   ├── footable.ttf
    │       │   ├── footable.woff
    │       │   ├── glyphicons-halflings-regular.eot
    │       │   ├── glyphicons-halflings-regular.ttf
    │       │   ├── glyphicons-halflings-regular.woff
    │       │   ├── glyphicons-halflings-regular.woff2
    │       │   ├── GtRkRNTnri0g82CjKnEB0Q.woff2
    │       │   ├── H2DMvhDLycM56KNuAtbJYA.woff2
    │       │   ├── HkF_qI1x_noxlxhrhMQYEFtXRa8TVwTICgirnJhmVJw.woff2
    │       │   ├── Lato-Black.ttf
    │       │   ├── Lato-BlackItalic.ttf
    │       │   ├── Lato-Bold.ttf
    │       │   ├── Lato-BoldItalic.ttf
    │       │   ├── Lato-Hairline.ttf
    │       │   ├── Lato-HairlineItalic.ttf
    │       │   ├── Lato-Italic.ttf
    │       │   ├── Lato-Light.ttf
    │       │   ├── Lato-LightItalic.ttf
    │       │   ├── Lato-Regular.ttf
    │       │   ├── muRcAtdNYlnTj3NeuakxChTbgVql8nDJpwnrE27mub0.woff2
    │       │   ├── PLygLKRVCQnA5fhu3qk5fQ.woff2
    │       │   ├── R4a6fty3waPci7C44H8AjvY6323mHUZFJMgTvxaG2iE.woff2
    │       │   ├── tI4j516nok_GrVf4dhunkg.woff2
    │       │   ├── VNUH7ZAcagYBWsAiBBCEY1tXRa8TVwTICgirnJhmVJw.woff2
    │       │   ├── XNVd6tsqi9wmKNvnh5HNEBJtnKITppOI_IvcXXDNrsc.woff2
    │       │   └── YMOYVM-eg6Qs9YzV9OSqZfesZW2xOQ-xsNqO47m55DA.woff2
    │       ├── images/
    │       │   ├── sugarColors.xml
    │       │   └── sidebar/
    │       │       └── README.txt
    │       ├── include/
    │       │   ├── Dashlets/
    │       │   │   └── DashletHeader.tpl
    │       │   ├── DetailView/
    │       │   │   ├── actions_buttons.tpl
    │       │   │   ├── actions_menu.tpl
    │       │   │   ├── DetailView.tpl
    │       │   │   ├── footer.tpl
    │       │   │   ├── header.tpl
    │       │   │   ├── tab_panel_content.tpl
    │       │   │   └── test.tpl
    │       │   ├── EditView/
    │       │   │   ├── actions_buttons.tpl
    │       │   │   ├── actions_menu.tpl
    │       │   │   ├── EditView.tpl
    │       │   │   ├── footer.tpl
    │       │   │   ├── header.tpl
    │       │   │   ├── QuickCreate.tpl
    │       │   │   ├── SugarVCR.tpl
    │       │   │   └── tab_panel_content.tpl
    │       │   ├── ListView/
    │       │   │   ├── ListViewDCMenu.tpl
    │       │   │   ├── ListViewGeneric.tpl
    │       │   │   ├── ListViewNoMassUpdate.tpl
    │       │   │   ├── ListViewPagination.tpl
    │       │   │   ├── ListViewPaginationBottom.tpl
    │       │   │   ├── ListViewPaginationTop.tpl
    │       │   │   └── ListViewSelectObjects.tpl
    │       │   ├── MySugar/
    │       │   │   ├── javascript/
    │       │   │   │   ├── AddRemoveDashboardPages.js
    │       │   │   │   └── retrievePage.js
    │       │   │   └── tpls/
    │       │   │       ├── actions_menu.tpl
    │       │   │       ├── addDashletsDialog.tpl
    │       │   │       ├── dashlet_page.tpl
    │       │   │       ├── MySugar.tpl
    │       │   │       └── MySugar2.tpl
    │       │   ├── Popups/
    │       │   │   └── tpls/
    │       │   │       └── PopupGeneric.tpl
    │       │   ├── SearchForm/
    │       │   │   └── tpls/
    │       │   │       ├── footer.tpl
    │       │   │       ├── header.tpl
    │       │   │       ├── SearchFormGeneric.tpl
    │       │   │       ├── SearchFormGenericAdvanced.tpl
    │       │   │       ├── SubpanelSearchFormGeneric.tpl
    │       │   │       └── SugarSpot.tpl
    │       │   └── SubPanel/
    │       │       └── tpls/
    │       │           ├── singletabmenu.tpl
    │       │           ├── SubPanelDynamic.tpl
    │       │           └── SubPanelTiles.tpl
    │       ├── js/
    │       │   ├── jscolor.js
    │       │   └── style.js
    │       ├── modules/
    │       │   ├── Calendar/
    │       │   │   └── tpls/
    │       │   │       ├── footer.tpl
    │       │   │       ├── form.tpl
    │       │   │       ├── header.tpl
    │       │   │       ├── settings.tpl
    │       │   │       └── shared_users.tpl
    │       │   ├── Leads/
    │       │   │   └── tpls/
    │       │   │       ├── ConvertLead.tpl
    │       │   │       ├── ConvertLeadFooter.tpl
    │       │   │       └── ConvertLeadHeader.tpl
    │       │   ├── Meetings/
    │       │   │   └── tpls/
    │       │   │       ├── footer.tpl
    │       │   │       └── header.tpl
    │       │   ├── ModuleBuilder/
    │       │   │   └── tpls/
    │       │   │       ├── includes.tpl
    │       │   │       └── layoutView.tpl
    │       │   ├── SavedSearch/
    │       │   │   └── SavedSearchForm.tpl
    │       │   ├── Studio/
    │       │   │   └── TabGroups/
    │       │   │       └── EditViewTabs.tpl
    │       │   └── Users/
    │       │       └── tpls/
    │       │           ├── DetailView-advanced-tab-content.tpl
    │       │           └── DetailView.tpl
    │       └── tpls/
    │           ├── _head.tpl
    │           ├── _headerModuleList.tpl
    │           ├── footer.tpl
    │           ├── header.tpl
    │           ├── Home.tpl
    │           └── login.tpl
    ├── upload/
    │   └── index.html
    ├── XTemplate/
    │   ├── LICENSE
    │   └── xtpl.php
    └── Zend/
        ├── Exception.php
        ├── Gdata.php
        ├── Loader.php
        ├── Oauth.php
        ├── Registry.php
        ├── Uri.php
        ├── Version.php
        ├── Gdata/
        │   ├── App.php
        │   ├── AuthSub.php
        │   ├── Books.php
        │   ├── Calendar.php
        │   ├── ClientLogin.php
        │   ├── Contacts.php
        │   ├── Docs.php
        │   ├── DublinCore.php
        │   ├── Entry.php
        │   ├── Exif.php
        │   ├── Extension.php
        │   ├── Feed.php
        │   ├── Gapps.php
        │   ├── Gbase.php
        │   ├── Geo.php
        │   ├── Health.php
        │   ├── HttpAdapterStreamingProxy.php
        │   ├── HttpAdapterStreamingSocket.php
        │   ├── HttpClient.php
        │   ├── Media.php
        │   ├── MediaMimeStream.php
        │   ├── MimeBodyString.php
        │   ├── MimeFile.php
        │   ├── Photos.php
        │   ├── Query.php
        │   ├── Spreadsheets.php
        │   ├── YouTube.php
        │   ├── App/
        │   │   ├── AuthException.php
        │   │   ├── BadMethodCallException.php
        │   │   ├── Base.php
        │   │   ├── BaseMediaSource.php
        │   │   ├── CaptchaRequiredException.php
        │   │   ├── Entry.php
        │   │   ├── Exception.php
        │   │   ├── Extension.php
        │   │   ├── Feed.php
        │   │   ├── FeedEntryParent.php
        │   │   ├── FeedSourceParent.php
        │   │   ├── HttpException.php
        │   │   ├── InvalidArgumentException.php
        │   │   ├── IOException.php
        │   │   ├── LoggingHttpClientAdapterSocket.php
        │   │   ├── MediaEntry.php
        │   │   ├── MediaFileSource.php
        │   │   ├── MediaSource.php
        │   │   ├── Util.php
        │   │   ├── VersionException.php
        │   │   └── Extension/
        │   │       ├── Author.php
        │   │       ├── Category.php
        │   │       ├── Content.php
        │   │       ├── Contributor.php
        │   │       ├── Control.php
        │   │       ├── Draft.php
        │   │       ├── Edited.php
        │   │       ├── Element.php
        │   │       ├── Email.php
        │   │       ├── Generator.php
        │   │       ├── Icon.php
        │   │       ├── Id.php
        │   │       ├── Link.php
        │   │       ├── Logo.php
        │   │       ├── Name.php
        │   │       ├── Person.php
        │   │       ├── Published.php
        │   │       ├── Rights.php
        │   │       ├── Source.php
        │   │       ├── Subtitle.php
        │   │       ├── Summary.php
        │   │       ├── Text.php
        │   │       ├── Title.php
        │   │       ├── Updated.php
        │   │       └── Uri.php
        │   ├── Books/
        │   │   ├── CollectionEntry.php
        │   │   ├── CollectionFeed.php
        │   │   ├── VolumeEntry.php
        │   │   ├── VolumeFeed.php
        │   │   ├── VolumeQuery.php
        │   │   └── Extension/
        │   │       ├── AnnotationLink.php
        │   │       ├── BooksCategory.php
        │   │       ├── BooksLink.php
        │   │       ├── Embeddability.php
        │   │       ├── InfoLink.php
        │   │       ├── PreviewLink.php
        │   │       ├── Review.php
        │   │       ├── ThumbnailLink.php
        │   │       └── Viewability.php
        │   ├── Calendar/
        │   │   ├── EventEntry.php
        │   │   ├── EventFeed.php
        │   │   ├── EventQuery.php
        │   │   ├── ListEntry.php
        │   │   ├── ListFeed.php
        │   │   └── Extension/
        │   │       ├── AccessLevel.php
        │   │       ├── Color.php
        │   │       ├── Hidden.php
        │   │       ├── Link.php
        │   │       ├── QuickAdd.php
        │   │       ├── Selected.php
        │   │       ├── SendEventNotifications.php
        │   │       ├── Timezone.php
        │   │       └── WebContent.php
        │   ├── Contacts/
        │   │   ├── ListEntry.php
        │   │   ├── ListFeed.php
        │   │   └── Extension/
        │   │       ├── Address.php
        │   │       ├── Birthday.php
        │   │       ├── Email.php
        │   │       ├── Name.php
        │   │       ├── Organization.php
        │   │       └── PhoneNumber.php
        │   ├── Docs/
        │   │   ├── DocumentListEntry.php
        │   │   ├── DocumentListFeed.php
        │   │   └── Query.php
        │   ├── DublinCore/
        │   │   └── Extension/
        │   │       ├── Creator.php
        │   │       ├── Date.php
        │   │       ├── Description.php
        │   │       ├── Format.php
        │   │       ├── Identifier.php
        │   │       ├── Language.php
        │   │       ├── Publisher.php
        │   │       ├── Rights.php
        │   │       ├── Subject.php
        │   │       └── Title.php
        │   ├── Exif/
        │   │   ├── Entry.php
        │   │   ├── Feed.php
        │   │   └── Extension/
        │   │       ├── Distance.php
        │   │       ├── Exposure.php
        │   │       ├── Flash.php
        │   │       ├── FocalLength.php
        │   │       ├── FStop.php
        │   │       ├── ImageUniqueId.php
        │   │       ├── Iso.php
        │   │       ├── Make.php
        │   │       ├── Model.php
        │   │       ├── Tags.php
        │   │       └── Time.php
        │   ├── Extension/
        │   │   ├── AttendeeStatus.php
        │   │   ├── AttendeeType.php
        │   │   ├── Comments.php
        │   │   ├── EntryLink.php
        │   │   ├── EventStatus.php
        │   │   ├── ExtendedProperty.php
        │   │   ├── FeedLink.php
        │   │   ├── OpenSearchItemsPerPage.php
        │   │   ├── OpenSearchStartIndex.php
        │   │   ├── OpenSearchTotalResults.php
        │   │   ├── OriginalEvent.php
        │   │   ├── Rating.php
        │   │   ├── Recurrence.php
        │   │   ├── RecurrenceException.php
        │   │   ├── Reminder.php
        │   │   ├── Transparency.php
        │   │   ├── Visibility.php
        │   │   ├── When.php
        │   │   ├── Where.php
        │   │   └── Who.php
        │   ├── Gapps/
        │   │   ├── EmailListEntry.php
        │   │   ├── EmailListFeed.php
        │   │   ├── EmailListQuery.php
        │   │   ├── EmailListRecipientEntry.php
        │   │   ├── EmailListRecipientFeed.php
        │   │   ├── EmailListRecipientQuery.php
        │   │   ├── Error.php
        │   │   ├── GroupEntry.php
        │   │   ├── GroupFeed.php
        │   │   ├── GroupQuery.php
        │   │   ├── MemberEntry.php
        │   │   ├── MemberFeed.php
        │   │   ├── MemberQuery.php
        │   │   ├── NicknameEntry.php
        │   │   ├── NicknameFeed.php
        │   │   ├── NicknameQuery.php
        │   │   ├── OwnerEntry.php
        │   │   ├── OwnerFeed.php
        │   │   ├── OwnerQuery.php
        │   │   ├── Query.php
        │   │   ├── ServiceException.php
        │   │   ├── UserEntry.php
        │   │   ├── UserFeed.php
        │   │   ├── UserQuery.php
        │   │   └── Extension/
        │   │       ├── EmailList.php
        │   │       ├── Login.php
        │   │       ├── Name.php
        │   │       ├── Nickname.php
        │   │       ├── Property.php
        │   │       └── Quota.php
        │   ├── Gbase/
        │   │   ├── Entry.php
        │   │   ├── Feed.php
        │   │   ├── ItemEntry.php
        │   │   ├── ItemFeed.php
        │   │   ├── ItemQuery.php
        │   │   ├── Query.php
        │   │   ├── SnippetEntry.php
        │   │   ├── SnippetFeed.php
        │   │   ├── SnippetQuery.php
        │   │   └── Extension/
        │   │       └── BaseAttribute.php
        │   ├── Geo/
        │   │   ├── Entry.php
        │   │   ├── Feed.php
        │   │   └── Extension/
        │   │       ├── GeoRssWhere.php
        │   │       ├── GmlPoint.php
        │   │       └── GmlPos.php
        │   ├── Health/
        │   │   ├── ProfileEntry.php
        │   │   ├── ProfileFeed.php
        │   │   ├── ProfileListEntry.php
        │   │   ├── ProfileListFeed.php
        │   │   ├── Query.php
        │   │   └── Extension/
        │   │       └── Ccr.php
        │   ├── Kind/
        │   │   └── EventEntry.php
        │   ├── Media/
        │   │   ├── Entry.php
        │   │   ├── Feed.php
        │   │   └── Extension/
        │   │       ├── MediaCategory.php
        │   │       ├── MediaContent.php
        │   │       ├── MediaCopyright.php
        │   │       ├── MediaCredit.php
        │   │       ├── MediaDescription.php
        │   │       ├── MediaGroup.php
        │   │       ├── MediaHash.php
        │   │       ├── MediaKeywords.php
        │   │       ├── MediaPlayer.php
        │   │       ├── MediaRating.php
        │   │       ├── MediaRestriction.php
        │   │       ├── MediaText.php
        │   │       ├── MediaThumbnail.php
        │   │       └── MediaTitle.php
        │   ├── Photos/
        │   │   ├── AlbumEntry.php
        │   │   ├── AlbumFeed.php
        │   │   ├── AlbumQuery.php
        │   │   ├── CommentEntry.php
        │   │   ├── PhotoEntry.php
        │   │   ├── PhotoFeed.php
        │   │   ├── PhotoQuery.php
        │   │   ├── TagEntry.php
        │   │   ├── UserEntry.php
        │   │   ├── UserFeed.php
        │   │   ├── UserQuery.php
        │   │   └── Extension/
        │   │       ├── Access.php
        │   │       ├── AlbumId.php
        │   │       ├── BytesUsed.php
        │   │       ├── Checksum.php
        │   │       ├── Client.php
        │   │       ├── CommentCount.php
        │   │       ├── CommentingEnabled.php
        │   │       ├── Height.php
        │   │       ├── Id.php
        │   │       ├── Location.php
        │   │       ├── MaxPhotosPerAlbum.php
        │   │       ├── Name.php
        │   │       ├── Nickname.php
        │   │       ├── NumPhotos.php
        │   │       ├── NumPhotosRemaining.php
        │   │       ├── PhotoId.php
        │   │       ├── Position.php
        │   │       ├── QuotaCurrent.php
        │   │       ├── QuotaLimit.php
        │   │       ├── Rotation.php
        │   │       ├── Size.php
        │   │       ├── Thumbnail.php
        │   │       ├── Timestamp.php
        │   │       ├── User.php
        │   │       ├── Version.php
        │   │       ├── Weight.php
        │   │       └── Width.php
        │   ├── Spreadsheets/
        │   │   ├── CellEntry.php
        │   │   ├── CellFeed.php
        │   │   ├── CellQuery.php
        │   │   ├── DocumentQuery.php
        │   │   ├── ListEntry.php
        │   │   ├── ListFeed.php
        │   │   ├── ListQuery.php
        │   │   ├── SpreadsheetEntry.php
        │   │   ├── SpreadsheetFeed.php
        │   │   ├── WorksheetEntry.php
        │   │   ├── WorksheetFeed.php
        │   │   └── Extension/
        │   │       ├── Cell.php
        │   │       ├── ColCount.php
        │   │       ├── Custom.php
        │   │       └── RowCount.php
        │   └── YouTube/
        │       ├── ActivityEntry.php
        │       ├── ActivityFeed.php
        │       ├── CommentEntry.php
        │       ├── CommentFeed.php
        │       ├── ContactEntry.php
        │       ├── ContactFeed.php
        │       ├── InboxEntry.php
        │       ├── InboxFeed.php
        │       ├── MediaEntry.php
        │       ├── PlaylistListEntry.php
        │       ├── PlaylistListFeed.php
        │       ├── PlaylistVideoEntry.php
        │       ├── PlaylistVideoFeed.php
        │       ├── SubscriptionEntry.php
        │       ├── SubscriptionFeed.php
        │       ├── UserProfileEntry.php
        │       ├── VideoEntry.php
        │       ├── VideoFeed.php
        │       ├── VideoQuery.php
        │       └── Extension/
        │           ├── AboutMe.php
        │           ├── Age.php
        │           ├── Books.php
        │           ├── Company.php
        │           ├── Control.php
        │           ├── CountHint.php
        │           ├── Description.php
        │           ├── Duration.php
        │           ├── FirstName.php
        │           ├── Gender.php
        │           ├── Hobbies.php
        │           ├── Hometown.php
        │           ├── LastName.php
        │           ├── Link.php
        │           ├── Location.php
        │           ├── MediaContent.php
        │           ├── MediaCredit.php
        │           ├── MediaGroup.php
        │           ├── MediaRating.php
        │           ├── Movies.php
        │           ├── Music.php
        │           ├── NoEmbed.php
        │           ├── Occupation.php
        │           ├── PlaylistId.php
        │           ├── PlaylistTitle.php
        │           ├── Position.php
        │           ├── Private.php
        │           ├── QueryString.php
        │           ├── Racy.php
        │           ├── Recorded.php
        │           ├── Relationship.php
        │           ├── ReleaseDate.php
        │           ├── School.php
        │           ├── State.php
        │           ├── Statistics.php
        │           ├── Status.php
        │           ├── Token.php
        │           ├── Uploaded.php
        │           ├── Username.php
        │           └── VideoId.php
        ├── Http/
        │   ├── Client.php
        │   ├── Exception.php
        │   ├── Response.php
        │   ├── Client/
        │   │   ├── Exception.php
        │   │   └── Adapter/
        │   │       ├── Curl.php
        │   │       ├── Exception.php
        │   │       ├── Interface.php
        │   │       ├── Proxy.php
        │   │       ├── Socket.php
        │   │       ├── Stream.php
        │   │       └── Test.php
        │   └── Response/
        │       └── Stream.php
        ├── Oauth/
        │   ├── Client.php
        │   ├── Config.php
        │   ├── Consumer.php
        │   ├── Exception.php
        │   ├── Http.php
        │   ├── Provider.php
        │   ├── Token.php
        │   ├── Config/
        │   │   └── ConfigInterface.php
        │   ├── Http/
        │   │   ├── AccessToken.php
        │   │   ├── RequestToken.php
        │   │   ├── UserAuthorization.php
        │   │   └── Utility.php
        │   ├── Signature/
        │   │   ├── Hmac.php
        │   │   ├── Plaintext.php
        │   │   ├── Rsa.php
        │   │   └── SignatureAbstract.php
        │   └── Token/
        │       ├── Access.php
        │       ├── AuthorizedRequest.php
        │       └── Request.php
        ├── Uri/
        │   ├── Exception.php
        │   └── Http.php
        └── Validate/
            ├── Abstract.php
            ├── Hostname.php
            ├── Interface.php
            ├── Ip.php
            └── Hostname/
                ├── Biz.php
                ├── Cn.php
                ├── Com.php
                └── Jp.php
